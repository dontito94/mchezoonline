<?php

use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use App\Repositories\Access\UserRepository;
use Webpatser\Uuid\Uuid;



class UsersTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys("users");

        $user_repo = new UserRepository();
        $exists = $user_repo->query()->where('email', 'admin@nexttask.co.tz')->count();
        \Illuminate\Support\Facades\Log::info($exists);
        if($exists == 0)
        {
            $admin = $user_repo->query()->firstOrCreate(['firstname' => 'Administrator'],  [
                'username' => 'admin',
                'firstname' => 'Administrator',
                'lastname' => 'Administrator',
                'middlename' => 'Administrator',
                'email' => 'admin@nexttask.co.tz',
                'phone' => '+255700000000',
                'password' => bcrypt('nexttask123?'),
                'confirmed' => '1',
//                'uuid' => Uuid::generate()->string
            ]);


            if (isset($admin))
            {


                //Attach user with admin role
                $admin->attachRole(1);

//                $user_repo->attachRolePermissions($admin);
            }
        }

        $this->enableForeignKeys("users");

//        $this->disableForeignKeys("users");
//        $this->delete('users');
//        \DB::table('users')->where('id', 1)->delete();
//        $userRepo = new \App\Repositories\Access\UserRepository();
//        $user = $userRepo->query()->updateOrCreate([
//            //'id' => '1',
//            'email' => 'admin@tbs-oas.go.tz',
//            'password' => bcrypt('TBSOASadmin'),
//            'confirmed' => '1',
//        ]);
//        $this->enableForeignKeys("users");
//
//        $this->disableForeignKeys('staffs');
//        $staff = new \App\Repositories\Staff\StaffRepository();
//        $staff->query()->updateOrCreate([
//            'user_id' => $user->id,
//            'staff_identity' => 'Tbs-001',
//            'firstname' => 'Admin',
//            'lastname' => 'TBS',
//            'email' => 'admin@tbs-oas.go.tz',
//            'created_by' => '0',
//            'designation_id' => 6,
//            'unit_id' => 2,
//            'port_id' => 1,
//        ]);
//        $this->enableForeignKeys("staffs");
//
//        $this->disableForeignKeys('role_user');
//        \DB::table('role_user')->where('user_id', $user->id)->delete();
//
//
//        \DB::table('role_user')->insert(array (
//            0 =>
//                array(
//                    'id'      => '1',
//                    'user_id' => $user->id,
//                    'role_id' => '1'
//                )
//        ));
//        $this->enableForeignKeys("role_user");

    }
}

