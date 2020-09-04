<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;
use App\Models\System\CodeValue;

class CodeValuesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys("code_values");

        $cv = CodeValue::firstOrCreate(
            ['id' => 1],
            [
//                'id' => 1,
                'code_id' => 1,
                'name' => 'Log In',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULLGI',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 2],
            [
//                'id' => 2,
                'code_id' => 1,
                'name' => 'Log Out',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULLGO',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 3],
            [
//                'id' => 3,
                'code_id' => 1,
                'name' => 'Failed Log In',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULFLI',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 4],
            [
//                'id' => 4,
                'code_id' => 1,
                'name' => 'Password Reset',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULPASR',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 5],
            [
//                'id' => 5,
                'code_id' => 1,
                'name' => 'User Lockout',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULUSL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 6],
            [
//                'id' => 5,
                'code_id' => 2,
                'name' => 'Development',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TTDEV',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 7],
            [
//                'id' => 5,
                'code_id' => 2,
                'name' => 'Configuration',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TTCON',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 8],
            [
//                'id' => 5,
                'code_id' => 2,
                'name' => 'Administration',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TTADM',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 9],
            [
//                'id' => 5,
                'code_id' => 2,
                'name' => 'Accounting',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TTACC',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 10],
            [
//                'id' => 5,
                'code_id' => 2,
                'name' => 'IT Support',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TTITS',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 11],
            [
//                'id' => 5,
                'code_id' => 3,
                'name' => 'Pending',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TSPEN',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 12],
            [
//                'id' => 5,
                'code_id' => 3,
                'name' => 'Completed',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TSCOM',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 13],
            [
//                'id' => 5,
                'code_id' => 3,
                'name' => 'Approved',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TSAPP',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 14],
            [
//                'id' => 5,
                'code_id' => 3,
                'name' => 'Reversed',
                'lang' => NULL,
                'description' => '',
                'reference' => 'TSREJ',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 15],
            [
//                'id' => 5,
                'code_id' => 4,
                'name' => 'Sick Leave',
                'lang' => NULL,
                'description' => '',
                'reference' => 'LTSIC',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 16],
            [
//                'id' => 5,
                'code_id' => 4,
                'name' => 'Emergency Leave',
                'lang' => NULL,
                'description' => '',
                'reference' => 'LTEML',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 17],
            [
//                'id' => 5,
                'code_id' => 5,
                'name' => 'No Power',
                'lang' => NULL,
                'description' => '',
                'reference' => 'CTNOP',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 18],
            [
//                'id' => 5,
                'code_id' => 5,
                'name' => 'Other',
                'lang' => NULL,
                'description' => '',
                'reference' => 'CTOTH',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 19],
            [
//                'id' => 5,
                'code_id' => 6,
                'name' => 'High Priority',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRIOH',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 20],
            [
//                'id' => 5,
                'code_id' => 6,
                'name' => 'Medium Priority',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRIOM',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 21 ],
            [
//                'id' => 5,
                'code_id' => 6,
                'name' => 'Low Priority',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRIOL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 22],
            [
//                'id' => 5,
                'code_id' => 7,
                'name' => 'Important',
                'lang' => NULL,
                'description' => '',
                'reference' => 'MSTIP',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 23],
            [
//                'id' => 5,
                'code_id' => 7,
                'name' => 'Info',
                'lang' => NULL,
                'description' => '',
                'reference' => 'MSTIN',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 24],
            [
//                'id' => 5,
                'code_id' => 8,
                'name' => 'Easy',
                'lang' => NULL,
                'description' => '',
                'reference' => 'DIFEA',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 25],
            [
//                'id' => 5,
                'code_id' => 8,
                'name' => 'Medium',
                'lang' => NULL,
                'description' => '',
                'reference' => 'DIFMD',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 26],
            [
//                'id' => 5,
                'code_id' => 8,
                'name' => 'Hard',
                'lang' => NULL,
                'description' => '',
                'reference' => 'DIFHD',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 27],
            [
//                'id' => 5,
                'code_id' => 9,
                'name' => 'None',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SCTNON',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 28],
            [
//                'id' => 5,
                'code_id' => 9,
                'name' => 'Hourly',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SCTHRL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 29],
            [
//                'id' => 5,
                'code_id' => 9,
                'name' => 'Daily',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SCTDLY',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 30],
            [
//                'id' => 5,
                'code_id' => 9,
                'name' => 'Weekly',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SCTWKY',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 31],
            [
//                'id' => 5,
                'code_id' => 9,
                'name' => 'Monthly',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SCTMNL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 32],
            [
//                'id' => 5,
                'code_id' => 9,
                'name' => 'Annually',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SCTANL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 33],
            [
//                'id' => 5,
                'code_id' => 10,
                'name' => 'Open',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRSOPN',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 34],
            [
//                'id' => 5,
                'code_id' => 10,
                'name' => 'On Hold',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRSOHD',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 35],
            [
//                'id' => 5,
                'code_id' => 10,
                'name' => 'Completed',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRSCML',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 36],
            [
//                'id' => 5,
                'code_id' => 10,
                'name' => 'Closed',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRSCL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 37],
            [
//                'id' => 5,
                'code_id' => 10,
                'name' => 'Cancelled',
                'lang' => NULL,
                'description' => '',
                'reference' => 'PRSCNC',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(

            ['id' => 38],
            [
//                'id' => 5,
                'code_id' => 11,
                'name' => 'Male',
                'lang' => NULL,
                'description' => '',
                'reference' => 'GENDMALE',
                'sort' => 1,
            ]
        );
        $cv = CodeValue::firstOrCreate(
            ['id' => 39],
            [
//                'id' => 5,
                'code_id' => 11,
                'name' => 'Female',
                'lang' => NULL,
                'description' => '',
                'reference' => 'GENDFEMLE',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 40],
            [
//                'id' => 5,
                'code_id' => 3,
                'name' => 'Pending for dispatch',
                'lang' => NULL,
                'description' => 'is status fr a test which is not dispatch to pending',
                'reference' => 'TSPFD',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 41],
            [
//                'id' => 5,
                'code_id' => 12,
                'name' => 'Created Task',
                'lang' => NULL,
                'description' => 'Activity when task related to a project is added',
                'reference' => 'PATTA',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['id' => 42],
            [
//                'id' => 5,
                'code_id' => 12,
                'name' => 'Completed Task',
                'lang' => NULL,
                'description' => 'Activity when task related to a project is completed',
                'reference' => 'PATTC',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 43],
            [
//                'id' => 5,
                'code_id' => 12,
                'name' => 'Attached Document',
                'lang' => NULL,
                'description' => 'Activity when document related to a project is attached',
                'reference' => 'PATDA',
                'sort' =>3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 44],
            [
//                'id' => 5,

                'code_id' => 13,
                'name' => 'All',
                'lang' => NULL,
                'description' => 'All pending tasks assigned/supervising',
                'reference' => 'PTTPALL',
                'sort' =>1,
                'isactive' => 0,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 45],
            [
//                'id' => 5,
                'code_id' => 13,
                'name' => 'Assigned',
                'lang' => NULL,
                'description' => 'All pending tasks assigned',
                'reference' => 'PTTPASS',
                'sort' =>2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::updateOrCreate(
            ['id' => 46],
            [
//                'id' => 5,
                'code_id' => 13,
                'name' => 'Due today',
                'lang' => NULL,
                'description' => 'All pending tasks assigned due today',
                'reference' => 'PTTPDUETD',
                'sort' =>3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::updateOrCreate(
            ['id' => 47],

            [
//                'id' => 5,
                'code_id' => 13,
                'name' => 'Overdue',
                'lang' => NULL,
                'description' => 'All pending tasks assigned overdue',
                'reference' => 'PTTPOVEDUE',
                'sort' =>4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 48],
            [
//                'id' => 5,
                'code_id' => 13,
                'name' => 'Supervising',
                'lang' => NULL,
                'description' => 'All pending tasks which i am supervising',
                'reference' => 'PTTPSUPVIS',
                'sort' =>5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::updateOrCreate(
            ['id' => 49],
            [
//                'id' => 5,
                'code_id' => 13,
                'name' => 'On Hold',
                'lang' => NULL,
                'description' => 'All pending tasks which are on hold',
                'reference' => 'PTTPHOLD',
                'sort' =>6,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 50],
            [
//                'id' => 5,
                'code_id' => 14,
                'name' => 'Waiting Approval',
                'lang' => NULL,
                'description' => 'All tasks pending for approval',
                'reference' => 'TATAPPROV',
                'sort' =>1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 52],
            [
//                'id' => 5,
                'code_id' => 14,
                'name' => 'Unread Convo',
                'lang' => NULL,
                'description' => 'All tasks pending with unread conversation',
                'reference' => 'TATCONVO',
                'sort' =>2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 53],
            [
//                'id' => 5,
                'code_id' => 14,
                'name' => 'Extension Requests',
                'lang' => NULL,
                'description' => 'All tasks pending with pending extension requests',
                'reference' => 'TATEXTREQ',
                'sort' =>3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::updateOrCreate(
            ['id' => 54],

            [
//                'id' => 5,
                'code_id' => 15,
                'name' => 'officers',
                'lang' => NULL,
                'description' => 'Officers list',
                'reference' => 'TSTOT',
                'sort' =>1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 55],

            [
//                'id' => 5,
                'code_id' => 15,
                'name' => 'Supervisors',
                'lang' => NULL,
                'description' => 'Supervisors List',
                'reference' => 'TSTST',
                'sort' =>2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 56],
            [
//                'id' => 5,
                'code_id' => 15,
                'name' => 'Idle Officers',
                'lang' => NULL,
                'description' => 'Idle officers List',
                'reference' => 'TSTIDDLE',
                'sort' =>3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );



        $cv = CodeValue::updateOrCreate(
            ['id' => 57],
            [
//                'id' => 5,
                'code_id' => 16,
                'name' => 'In Time Completion Credit',
                'lang' => NULL,
                'description' => 'Completion of task in time credit',
                'reference' => 'TPRCITC',
                'sort' =>1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::updateOrCreate(
            ['id' => 58],
            [
//                'id' => 5,
                'code_id' => 16,
                'name' => 'Rejection Discredit',
                'lang' => NULL,
                'description' => 'Discredit for rejection',
                'reference' => 'TPRCREJC',
                'sort' =>2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 59],
            [
//                'id' => 5,
                'code_id' => 16,
                'name' => 'Overdue Discredit',
                'lang' => NULL,
                'description' => 'Discredit for ovedue completion of tasks',
                'reference' => 'TPRCOVDIS',
                'sort' =>3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );



        $cv = CodeValue::updateOrCreate(
            ['id' => 60],
            [
//                'id' => 5,
                'code_id' => 16,
                'name' => 'Consistency Weight rating',
                'lang' => NULL,
                'description' => 'Consistency weight rating',
                'reference' => 'TPRCCONST',
                'sort' =>4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 61],
            [
//                'id' => 5,
                'code_id' => 3,
                'name' => 'On Hold',
                'lang' => NULL,
                'description' => 'status if task is onhold',
                'reference' => 'TSHLD',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 62],
            [
//                'id' => 5,
                'code_id' => 17,
                'name' => 'Created Task',
                'lang' => NULL,
                'description' => 'Created Task',
                'reference' => 'UATCRETA',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 63],
            [
//                'id' => 5,
                'code_id' => 17,
                'name' => 'Completed Task',
                'lang' => NULL,
                'description' => 'Completed Task',
                'reference' => 'UATCOMTA',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 64],
            [
//                'id' => 5,
                'code_id' => 17,
                'name' => 'Finished Deliverable',
                'lang' => NULL,
                'description' => 'Finished Task Deliverable',
                'reference' => 'UATCOMDELI',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 65],
            [
//                'id' => 5,
                'code_id' => 18,
                'name' => 'Task',
                'lang' => NULL,
                'description' => 'Task',
                'reference' => 'TASLTASK',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 66],
            [
//                'id' => 5,
                'code_id' => 18,
                'name' => 'Bug',
                'lang' => NULL,
                'description' => 'Bug',
                'reference' => 'TASLBUG',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 67],
            [
//                'id' => 5,
                'code_id' => 18,
                'name' => 'Change',
                'lang' => NULL,
                'description' => 'Change',
                'reference' => 'TASLCHNGE',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 68],
            [
//                'id' => 5,
                'code_id' => 18,
                'name' => 'Issue',
                'lang' => NULL,
                'description' => 'Issue',
                'reference' => 'TASLISSU',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 69],
            [
//                'id' => 5,
                'code_id' => 19,
                'name' => 'Task Group',
                'lang' => NULL,
                'description' => 'Task group or module',
                'reference' => 'PTTTASGRP',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 70],
            [
//                'id' => 5,
                'code_id' => 20,
                'name' => 'Weekly',
                'lang' => NULL,
                'description' => 'Report based on weekly',
                'reference' => 'RPPRDWEEK',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 71],
            [
//                'id' => 5,
                'code_id' => 20,
                'name' => 'Monthly',
                'lang' => NULL,
                'description' => 'Report based on monthly',
                'reference' => 'RPPRDMONTH',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 72],
            [
//                'id' => 5,
                'code_id' => 21,
                'name' => 'Product',
                'lang' => NULL,
                'description' => 'Company product',
                'reference' => 'COTYPRODU',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::firstOrCreate(
            ['id' => 73],
            [
//                'id' => 5,
                'code_id' => 21,
                'name' => 'Service',
                'lang' => NULL,
                'description' => 'Company service',
                'reference' => 'COTYSERVI',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 74],
            [
//                'id' => 5,
                'code_id' => 22,
                'name' => 'Next',
                'lang' => NULL,
                'description' => 'After this period type e.g. Next Month',
                'reference' => 'TITGNXT',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 75],
            [
//                'id' => 5,
                'code_id' => 22,
                'name' => 'Previous',
                'lang' => NULL,
                'description' => 'Before this period type e.g. Previous Month',
                'reference' => 'TITGPRV',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 76],
            [
//                'id' => 5,
                'code_id' => 22,
                'name' => 'Current',
                'lang' => NULL,
                'description' => 'Current this period type e.g. This Month',
                'reference' => 'TITGCURR',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 77],
            [
//                'id' => 5,
                'code_id' => 17,
                'name' => 'Approved Task',
                'lang' => NULL,
                'description' => 'Approved Task',
                'reference' => 'UATAPP',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 78],
            [
//                'id' => 5,
                'code_id' => 12,
                'name' => 'Approved Task',
                'lang' => NULL,
                'description' => 'Activity when task related to a project is approved',
                'reference' => 'PATTAPP',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );   $cv = CodeValue::updateOrCreate(
            ['id' => 79],
            [
//                'id' => 5,
                'code_id' => 23,
                'name' => 'Task ',
                'lang' => NULL,
                'description' => 'Setting Type for the task ',
                'reference' => 'SEGTTAS',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );   $cv = CodeValue::updateOrCreate(
            ['id' => 80],
            [
//                'id' => 5,
                'code_id' => 23,
                'name' => 'Project ',
                'lang' => NULL,
            'description' => 'Setting Type for the Project ',
                'reference' => 'SEGTPROS',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );   $cv = CodeValue::updateOrCreate(
            ['id' => 81],
            [
//                'id' => 5,
                'code_id' => 23,
                'name' => 'Timesheet ',
                'lang' => NULL,
            'description' => 'Setting Type for the timesheet ',
                'reference' => 'SEGTTIMES',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );   $cv = CodeValue::updateOrCreate(
            ['id' => 82],
            [
//                'id' => 5,
                'code_id' => 23,
                'name' => 'General ',
                'lang' => NULL,
                'description' => 'Setting Type for general  ',
                'reference' => 'SEGTGENS',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 83],
            [
//                'id' => 5,
                'code_id' => 23,
                'name' => 'System ',
                'lang' => NULL,
                'description' => 'Manage System settings  ',
                'reference' => 'SEGTSYSTM',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 84],
            [
//                'id' => 5,
                'code_id' => 24,
                'name' => 'info',
                'lang' => NULL,
                'description' => 'Type for the info notes',
                'reference' => 'NOTTYPINF',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 85],
            [
//                'id' => 5,
                'code_id' => 24,
                'name' => 'warning',
                'lang' => NULL,
                'description' => 'Type for the warning notes',
                'reference' => 'NOTTYPWARN',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 86],
            [
//                'id' => 5,
                'code_id' => 24,
                'name' => 'success',
                'lang' => NULL,
                'description' => 'Type for the success notes',
                'reference' => 'NOTTYPSUC',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 87],
            [
//                'id' => 5,
                'code_id' => 24,
                'name' => 'danger',
                'lang' => NULL,
                'description' => 'Type for the danger notes',
                'reference' => 'NOTTYPDANG',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 88],
            [
//                'id' => 5,
                'code_id' => 24,
                'name' => 'primary',
                'lang' => NULL,
                'description' => 'Type for the primary notes',
                'reference' => 'NOTTYPPRIM',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['id' => 89],
            [
//                'id' => 5,
                'code_id' => 13,
                'name' => 'Completed ',
                'lang' => NULL,
                'description' => 'Completed tasks which are not approved',
                'reference' => 'PTTCOMNTAP',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::firstOrCreate(
            ['id' => 90],
            [
//                'id' => 5,
                'code_id' => 4,
                'name' => 'Holiday Leave',
                'lang' => NULL,
                'description' => 'Holiday leave type for the staff leave',
                'reference' => 'LTHOL',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $this->enableForeignKeys("code_values");

        $this->alterIdSequence('code_values');

    }
}
