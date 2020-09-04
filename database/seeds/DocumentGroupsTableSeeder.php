<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class DocumentGroupsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys("document_groups");
        $this->delete('document_groups');

        \DB::table('document_groups')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Task Documents',
            'top_path' => '/task',
                ),

            1 =>
                array (
                    'id' => 2,
                    'name' => 'Deliverable Documents',
            'top_path' => '/deliverable',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Project Documents',
            'top_path' => '/project_documents',
                ),
            3 => array (
                    'id' => 4,
                    'name' => 'General User Documents',
            'top_path' => '/user/general',
                ),
            4 => array (
                    'id' => 5,
                    'name' => 'Staff Leave documents',
            'top_path' => '/user/leave_documents',
                ),
//

        ));
        $this->enableForeignKeys("document_groups");
        /*Make directory for top path for each doc group*/
        (new \App\Repositories\System\DocumentGroupRepository())->makeDirectoryTopPath();
    }
}
