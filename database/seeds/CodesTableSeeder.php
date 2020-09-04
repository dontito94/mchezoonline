<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;
use App\Models\System\Code;

class CodesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("codes");
        $this->delete('codes');

        \DB::table('codes')->insert(array (

            0 => array (
                'id' => 1,
                'name' => 'User Logs',
                'lang' => 'user_log',
                'is_system_defined' => 1,
            ),
            1 => array (
                'id' => 2,
                'name' => 'Task Type',
                'lang' => 'task_type',
                'is_system_defined' => 1,
            ),
            2 => array (
                'id' => 3,
                'name' => 'Task Status',
                'lang' => 'task_status',
                'is_system_defined' => 1,
            ),
            3 => array (
                'id' => 4,
                'name' => 'Staff Leave Types',
                'lang' => 'leave_type',
                'is_system_defined' => 1,
            ),
            4 => array (
                'id' => 5,
                'name' => 'Challenge Type',
                'lang' => 'challenge_type',
                'is_system_defined' => 1,
            ),
            5 => array (
                'id' => 6,
                'name' => 'Priority',
                'lang' => 'priority',
                'is_system_defined' => 1,
            ),
            6 => array (
                'id' => 7,
                'name' => 'Message types',
                'lang' => 'message_types',
                'is_system_defined' => 1,
            ),
            7 => array (
                'id' => 8,
                'name' => 'Difficulty levels',
                'lang' => 'difficulty_levels',
                'is_system_defined' => 1,
            ),
            8 => array (
                'id' => 9,
                'name' => 'Schedule Repeat Types',
                'lang' => 'schedule_repeat_type',
                'is_system_defined' => 1,
            ),
            9 => array (
                'id' => 10,
                'name' => 'Project Status',
                'lang' => 'project_status',
                'is_system_defined' => 1,
            ),

            10 => array (
                'id' => 11,
                'name' => 'Genders',
                'lang' => 'genders',
                'is_system_defined' => 1,
            ),
            11 => array (
                'id' => 12,
                'name' => 'Project Activity Types',
                'lang' => 'genders',
                'is_system_defined' => 1,
            ),
            12 => array (
                'id' => 13,
                'name' => 'Pending Task Types',
                'lang' => 'pending_task_types',
                'is_system_defined' => 1,
            ),

            13 => array (
                'id' => 14,
                'name' => 'Task Alert Types',
                'lang' => 'task_alert_types',
                'is_system_defined' => 1,
            ),

            14 => array (
                'id' => 15,
                'name' => 'Task Staff Types',
                'lang' => 'task_staff_types',
                'is_system_defined' => 1,
            ),

            15 => array (
                'id' => 16,
                'name' => 'Task Performance Rating Criteria',
                'lang' => 'task_rating_criteria',
                'is_system_defined' => 1,
            ),

            16 => array (
                'id' => 17,
                'name' => 'User Activities Types',
                'lang' => 'user_activities_types',
                'is_system_defined' => 1,
            ),

            17 => array (
                'id' => 18,
                'name' => 'Task Labels',
                'lang' => 'task_labels',
                'is_system_defined' => 1,
            ),

            18 => array (
                'id' => 19,
                'name' => 'Project Task Tag Types',
                'lang' => 'project_task_tag_types',
                'is_system_defined' => 1,
            ),

            19 => array (
                'id' => 20,
                'name' => 'Report period types',
                'lang' => 'report_period_types',
                'is_system_defined' => 1,
            ),


            20 => array (
                'id' => 21,
                'name' => 'Company offering types',
                'lang' => 'company_offering_types',
                'is_system_defined' => 1,
            ),

            21 => array (
                'id' => 22,
                'name' => 'Time Title tags on Recurring Task',
                'lang' => 'time_title_tags',
                'is_system_defined' => 1,
            ),
            22 => array (
                'id' => 23,
                'name' => 'Setting Group Type',
                'lang' => 'setting_group_type',
                'is_system_defined' => 1,
            ),23 => array (
                'id' => 24,
                'name' => 'Notes Type',
                'lang' => 'notes_type',
                'is_system_defined' => 1,
            ),

        ));

        $this->enableForeignKeys("codes");

    }
}
