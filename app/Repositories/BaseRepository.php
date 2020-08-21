<?php

namespace App\Repositories;

use App\Exceptions\GeneralException;
use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class BaseRepository.
 */
class BaseRepository
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->query()->get();
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->query()->count();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->query()->find($id);
    }

    /**
     * @return mixed
     */
    public function query()
    {
        return call_user_func(static::MODEL.'::query');
    }


    /*Query only active resources*/
    public function queryActive()
    {
        return $this->query()->where('isactive', 1);
    }


    public function all()
    {
        return call_user_func(static::MODEL.'::all');
    }

    /**
     * Return Only Importer ID
     * @param $uuid
     * @return mixed
     */
    public function getByUuid($uuid)
    {
        return $this->query()->where('uuid', $uuid)->first();
    }

    /**
     * @param $pivot_table_name
     * @param array $relation_where_input
     * @param array $attributes
     * Manual sync pivot for many to many
     */
    public function generalSyncPivot($pivot_table_name, array $relation_where_input, array $attributes = [])
    {
        $check_if_exists = DB::table($pivot_table_name)->where($relation_where_input)->count();

        if($check_if_exists > 0)
        {
            //exists
            if(count($attributes))
            {
                DB::table($pivot_table_name)->where($relation_where_input)->update($attributes);
            }
        }else{
            //do not exists - Attach
            $insert_input = array_merge($relation_where_input, $attributes);
            DB::table($pivot_table_name)->insert($insert_input);
        }
    }



    /*Create using mass assign by filtering keys which are in table*/
    public function createMassAssign($table, array $input)
    {

        $input_common = $this->getCommonInputForMassAssign($table, $input);

        $this->query()->create($input_common);
    }

//    Create mass assign using DB builder
    public function createMassAssignDbBuilder($table, array $input)
    {

        $input_common = $this->getCommonInputForMassAssign($table, $input);

        DB::table($table)->insert($input_common);
    }

    /*update mass assign by filtering keys exists ib the table*/
    public function updateMassAssign($table,$resource_id, array $input)
    {
        $resource = $this->find($resource_id);
        $input_common = $this->getCommonInputForMassAssign($table, $input);
        $resource->update($input_common);
    }

    /*update mass assign by filtering keys exists ib the table by where input*/
    public function updateMassAssignByWhere($table,array $where_input, array $input)
    {
        $input_common = $this->getCommonInputForMassAssign($table, $input);
        DB::table($table)->where($where_input)->update($input_common);
    }

    /*Get Input with all keys exists in the table columns*/
    public function getCommonInputForMassAssign($table, array $input)
    {
        $columns = DB::getSchemaBuilder()->getColumnListing($table);

        $input_keys = array_keys($input);

        $keys_common = (array_intersect($columns, $input_keys));

        /*STart get values*/
        $values = [];
        foreach($keys_common as $key)
        {
            array_push($values, $input[$key]);
        }
        $array_combine = array_combine($keys_common, $values);
        return $array_combine;
    }

    /**
     * Check if phone number is unique
     * @param $phone_formatted
     * @param $phone_column_name
     * @param $action_type
     * @param null $object_id => primary key of the model
     * @throws GeneralException
     */
    public function checkIfPhoneIsUnique($phone_formatted,$phone_column_name, $action_type,$object_id = null)
    {
        $return = 0;
        if ($action_type == 1){
            /*on insert*/
            $return = $this->query()->where($phone_column_name, $phone_formatted)->count();
        }else{
            /*on edit*/
            $return = $this->query()->where('id','<>', $object_id)->where($phone_column_name, $phone_formatted)->count();
        }
        /*Check outcome */
        if ($return == 0)
        {
            //is unique
        }else{
            /*Phone is taken: throw exception*/
            throw new GeneralException(__('exceptions.general.taken', ['key' => __('label.phone') ]));
        }
    }






    /**
     * @param array $input
     * @return mixed
     * Regex column search
     */
    public function regexColumnSearch(array $input)
    {
        $return = $this->query();
        if (count($input)) {
            $sql = $this->regexFormatColumn($input)['sql'];
            $keyword = $this->regexFormatColumn($input)['keyword'];
            $return = $this->query()->whereRaw($sql, $keyword);
        }
        return $return;
    }

    /**
     * @param array $input
     * @return array
     * Regex format according to drive used
     */
    public function regexFormatColumn(array $input)
    {
        $keyword = [];
        $sql = "";
        if (count($input)) {
            switch (DB::getDriverName()) {
                case 'pgsql':
                    foreach ($input as $key => $value) {
                        $sql .= " cast({$key} as text) ~* ? or";
                        $keyword[] = $value;
                    }
                    break;
                default:
                    foreach ($input as $key => $value) {
                        $value = strtolower($value);
                        $sql .= " LOWER({$key}) REGEXP  ? or";
                        $keyword[] = $value;
                    }
            }
            $sql = substr($sql, 0, -2);
            $sql = "( {$sql} )";
        }
        return ['sql' => $sql, 'keyword' => $keyword];
    }

    public function checkIfAdminIsOwner()
    {
        $user = access()->user();
        if ($user->user_account_type != 1){
            throw new GeneralException(__('exceptions.general.admin_restriction'));
        }
    }


    /*Check if accessor user / ser logged in can access this user profile/tasks*/
    public function checkIfCanAccessThisStaff($accessor_user_id, $accessed_user_id)
    {
        $accessor_user = User::query()->find($accessor_user_id);

        $users_can_access = $accessor_user->all_staff_ids_can_access;

        return in_array($accessed_user_id,$users_can_access) ? true : false;
    }

    /*Check if can access with exception*/
    public function checkIfCanAccessThisStaffWithException($accessor_user_id, $accessed_user_id)
    {
        $check = $this->checkIfCanAccessThisStaff($accessor_user_id, $accessed_user_id);

        if($check){
//do nothing - Allow to access
        }else{
            throw new GeneralException(__('exceptions.general.user_access_right'));
        }
    }

}
