<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class DocumentsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("documents");
        $this->delete('documents');

        \DB::table('documents')->insert(array (
            0 => array (
                'id' => 1,
                'name' => 'Task Attachment',
                'document_group_id' => 1,
                'description' => 'This is The task attachment',
//                'reference' => 'ATTASK',

                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),

            1 => array (
                'id' => 2,
                'name' => 'Submitted Doc',
                'document_group_id' => 2,
                'description' => 'This is The officer deliverable document',
//                'reference' => 'ATTASK',
                'isrecurring' => 0,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            2 => array (
                'id' => 3,
                'name' => 'Response Doc',
                'document_group_id' =>2,
                'description' => 'This is The reply/supervisor deliverable document',
//                'reference' => 'ATTASK',
                'isrecurring' => 0,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),

            3 => array (
                'id' => 4,
                'name' => 'Recurring task Attachment',
                'document_group_id' =>1,
                'description' => 'This is attachment for a recurring task',
//                'reference' => 'ATTASK',
                'isrecurring' => 0,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            4 => array (
                'id' => 5,
                'name' => 'TOR',
                'document_group_id' =>3,
                'description' => 'Terms of Reference Document',
//                'reference' => 'ATTASK',
                'isrecurring' => 0,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            5 => array (
                'id' => 6,
                'name' => 'UAT/Delivery Document',
                'document_group_id' =>3,
                'description' => 'user acceptance testing document',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            6 => array (
                'id' => 7,
                'name' => 'Other Relevant Document',
                'document_group_id' =>3,
                'description' => 'other documents related to a project',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            7 => array (
                'id' => 8,
                'name' => 'Progress Report',
                'document_group_id' =>3,
                'description' => 'report for a project progress',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            8 => array (
                'id' => 9,
                'name' => 'Final Report',
                'document_group_id' =>3,
                'description' => 'project final report',
//                'reference' => 'ATTASK',
                'isrecurring' => 0,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            9 => array (
                'id' => 10,
                'name' => 'User Photo',
                'document_group_id' =>4,
                'description' => 'user profile picture',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 1,
                'isactive' => 1,
            ),

            10 => array (
                'id' => 11,
                'name' => 'Functional Specification & Design',
                'document_group_id' =>3,
                'description' => 'Functional Specification & Design document',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),

            11 => array (
                'id' => 12,
                'name' => 'Medical Document',
                'document_group_id' =>5,
                'description' => 'Medical documents to approve sickness leave',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),
            12 => array (
                'id' => 13,
                'name' => 'Other Supporting Document',
                'document_group_id' =>5,
                'description' => 'Other document to support staff leave',
//                'reference' => 'ATTASK',
                'isrecurring' => 1,
                'ismandatory' => 0,
                'isrenewable' => 0,
                'isactive' => 1,
            ),


        ));

        $this->enableForeignKeys("documents");

    }
}
