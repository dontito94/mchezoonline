<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;
use App\Models\System\Sysdef;

class SysdefsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'THMJCA'],
            [
                'name' => 'max_job_count_for_alert',
                'display_name' => 'Max jobs count for alerting admin',
                'value' => '20',
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'THMJCA',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYNAH'],
            [
                'name' => 'new_alert_hours',
                'display_name' => 'New Alert Displaying Hours',
                'value' => 24,
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'SYNAH',
                'sysdef_group_id' => 1,
            ]
        );
        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'MAXDCS'],
            [
                'name' => 'max_document_file_size',
                'display_name' => 'Max  document file size (MB)',
                'value' => '3',
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'MAXDCS',
                'sysdef_group_id' => 1,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRRJDH'],
            [
                'name' => 'rejection_discredit_hard',
                'display_name' => 'Rejection Discredit Hard Task (Out of 5)',
                'value' => '0.2',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRRJDM'],
            [
                'name' => 'rejection_discredit_medium',
                'display_name' => 'Rejection Discredit Medium Task(Out of 5)',
                'value' => '0.35',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRRJDE'],
            [
                'name' => 'rejection_discredit_easy',
                'display_name' => 'Rejection Discredit Easy Task (Out of 5)',
                'value' => '0.5',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRROVDDH'],
            [
                'name' => 'overdue_discredit_hard',
                'display_name' => 'Overdue Discredit Hard Task (Out of 5)',
                'value' => '0.2',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRROVDDM'],
            [
                'name' => 'overdue_discredit_medium',
                'display_name' => 'Overdue Discredit Medium Task (Out of 5)',
                'value' => '0.4',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRROVDDE'],
            [
                'name' => 'overdue_discredit_easy',
                'display_name' => 'Overdue Discredit Easy Task (Out of 5)',
                'value' => '0.6',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRINTMH'],
            [
                'name' => 'in_time_credit_hard',
                'display_name' => 'In Time Credit Hard Task (Out of 5)',
                'value' => '0.2',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRINTMM'],
            [
                'name' => 'in_time_credit_medium',
                'display_name' => 'In Time Credit Medium Task (Out of 5)',
                'value' => '0.1',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRINTME'],
            [
                'name' => 'in_time_credit_easy',
                'display_name' => 'In Time Credit Easy Task (Out of 5)',
                'value' => '0.05',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTNT'],
            [
                'name' => 'no_of_tasks_to_trigger',
                'display_name' => 'Consistency: No of tasks to trigger consistency',
                'value' => '10',
                'data_type' => 'integer',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTWH'],
            [
                'name' => 'consistency_weight_hard',
                'display_name' => 'Consistency: Weight of Hard Task',
                'value' => '3',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTWM'],
            [
                'name' => 'consistency_weight_medium',
                'display_name' => 'Consistency: Weight of Medium Task',
                'value' => '2',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTWE'],
            [
                'name' => 'consistency_weight_easy',
                'display_name' => 'Consistency: Weight of Easy Task',
                'value' => '1',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTBA'],
            [
                'name' => 'consistency_bonus_above_90',
                'display_name' => 'Consistency: Bonus rating above 90 (out of 5)',
                'value' => '0.5',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTBB'],
            [
                'name' => 'consistency_bonus_above_80',
                'display_name' => 'Consistency: Bonus rating above 85 - 89 (out of 5)',
                'value' => '0.3',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRCSTRTH'],
            [
                'name' => 'consistency_threshold_rating',
                'display_name' => 'Consistency: Threshold Rating trigger (out of 5)',
                'value' => '4',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRMCBR'],
            [
                'name' => 'maximum_credit_bonus_rating',
                'display_name' => 'Maximum credit bonus rating per task (out of 5)',
                'value' => '2',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'TPRRMDBR'],
            [
                'name' => 'maximum_discredit_bonus_rating',
                'display_name' => 'Maximum Discredit bonus rating per task (out of 5)',
                'value' => '2.5',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'THSHMXHRDY'],
            [
                'name' => 'max_timesheet_hr_day',
                'display_name' => 'Maximum Timesheet hours per day',
                'value' => '12',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 1,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'THSHMXDEDI'],
            [
                'name' => 'max_days_to_edit',
                'display_name' => 'Maximum Days Allowed to Edit',
                'value' => '10',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'THSHPAGLOW'],
            [
                'name' => 'pagination_low',
                'display_name' => 'Pagination Low',
                'value' => '5',
                'data_type' => 'numeric',
                'isactive' => 1,
                'sysdef_group_id' => 1,
            ]
        );

    }
}
