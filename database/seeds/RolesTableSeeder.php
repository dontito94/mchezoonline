<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class RolesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("roles");
        $this->delete('roles');

        \DB::table('roles')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Admin',
                    'description' => 'Has all permission',
                    'isactive' => 1,
                    'isadmin' => 1,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Supervisor',
                    'description' => 'Add,modify allocate task',
                    'isactive' => 1,
                    'isadmin' => 0,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Officer',
                    'description' => 'Update task deliverable',
                    'isactive' => 1,
                    'isadmin' => 0,
                ),

        ));
        $this->enableForeignKeys("roles");

    }
}
