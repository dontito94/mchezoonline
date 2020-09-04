<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class PermissionsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("permissions");
        $this->delete('permissions');

        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'permission_group_id' => 1,
                    'name' => 'all_functions',
                    'display_name' => 'All Functions',
                    'description' => 'Administrative rights to access all functions',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),

            1 =>
                array (
                    'id' => 2,
                    'permission_group_id' => 2,
                    'name' => 'manage_roles_permissions',
                    'display_name' => 'Manage Roles and Permissions',
                    'description' => 'Manage Roles and Permissions',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),

            2 =>
                array (
                    'id' => 3,
                    'permission_group_id' => 2,
                    'name' => 'manage_users',
                    'display_name' => 'Manage Users',
                    'description' => 'Users management',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),

            3 =>
                array (
                    'id' => 4,
                    'permission_group_id' => 2,
                    'name' => 'manage_system',
                    'display_name' => 'Manage System',
                    'description' => 'Manage System',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),
            4 =>
                array (
                    'id' => 5,
                    'permission_group_id' => 2,
                    'name' => 'admin_menu',
                    'display_name' => 'Administrator Menu',
                    'description' => 'View administrator menu',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),

            5 => array (
                'id' => 6,
                'permission_group_id' => 2,
                'name' => 'workflow_allocation',
                'display_name' => 'Workflow Allocation',
                'description' => 'Workflow allocation and reallocation to staff',
                'ischecker' => 0,
                'isadmin' => 1
            ),
            6 => array (
                'id' => 7,
                'permission_group_id' => 4,
                'name' => 'approve_task_completion',
                'display_name' => 'Approve Task Completion',
                'description' => 'approve completion of the task by supervisor',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            7 => array (
                'id' => 8,
                'permission_group_id' => 4,
                'name' => 'add_new_task',
                'display_name' => 'Add New Task',
                'description' => 'For a supervisor to add task',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            8 => array (
                'id' => 9,
                'permission_group_id' => 4,
                'name' => 'delete_task',
                'display_name' => 'Delete Task',
                'description' => 'for a supervisor to delete task',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            9 => array (
                'id' => 10,
                'permission_group_id' => 4,
                'name' => 'view_pending_task',
                'display_name' => 'View Pending Task',
                'description' => 'View all pending tasks to be assured',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            10 => array (
                'id' => 11,
                'permission_group_id' => 4,
                'name' => 'modify_task',
                'display_name' => 'Modify Task',
                'description' => 'Edit and modify task by supervisor',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            11 => array (
                'id' => 12,
                'permission_group_id' => 4,
                'name' => 'view_user_dashboard',
                'display_name' => 'View User Dashboard',
                'description' => 'View other users dashboard is for supervisor',
                'ischecker' => 0,
                'isadmin' => 0
            ),



            12 => array (
                'id' => 13,
                'permission_group_id' => 4,
                'name' => 'view_all_allocated_task',
                'display_name' => 'View Allocated tasks',
                'description' => 'View allocated tasks',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            13 => array (
                'id' => 14,
                'permission_group_id' => 4,
                'name' => 'view_all_supervisor_tasks',
                'display_name' => 'View All supervisor tasks',
                'description' => 'View all supervisor task',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            14 => array (
                'id' => 15,
                'permission_group_id' => 4,
                'name' => 'view_all_pending_tasks_for_approval',
                'display_name' => 'View all pending tasks for approval',
                'description' => 'View all pending task for approval',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            15 => array (
                'id' => 16,
                'permission_group_id' => 4,
                'name' => 'task_allocation',
                'display_name' => 'Allocate task to a User',
                'description' => 'Allocate task to a user',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            16 => array (
                'id' => 17,
                'permission_group_id' => 4,
                'name' => 'task_comment',
                'display_name' => 'Add task comment',
                'description' => 'Add new comment for a task',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            17 => array (
                'id' => 18,
                'permission_group_id' => 4,
                'name' => 'mark_comment_as_read',
                'display_name' => 'Make task comment as read',
                'description' => 'Make task comments as read',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            18 => array (
                'id' => 19,
                'permission_group_id' => 4,
                'name' => 'tick_task_deliverable',
                'display_name' => 'Tick task deliverable',
                'description' => 'View for tick task deliverable',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            19 => array (
                'id' => 20,
                'permission_group_id' => 4,
                'name' => 'task_deadline_extension',
                'display_name' => 'View Task Deadline Extension',
                'description' => 'View Task Deadline Extension',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            20 => array (
                'id' => 21,
                'permission_group_id' => 5,
                'name' => 'view_staff_same_unit',
                'display_name' => 'View Staff on Same Unit Only',
                'description' => 'View Staff on Same Unit Only',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            21 => array (
                'id' => 22,
                'permission_group_id' => 5,
                'name' => 'view_staff_same_department',
                'display_name' => 'View Staff on Same Department Only',
                'description' => 'View Staff on Same Department Only',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            22 => array (
                'id' => 23,
                'permission_group_id' => 5,
                'name' => 'view_staff_same_directorate',
                'display_name' => 'View Staff on Same Directorate Only',
                'description' => 'View Staff on Same Directorate Only',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            23 => array (
                'id' => 24,
                'permission_group_id' => 5,
                'name' => 'view_staff_same_designation',
                'display_name' => 'View Staff with Same Designation Only',
                'description' => 'View Staff with same designation Only',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            24 => array (
                'id' => 25,
                'permission_group_id' => 5,
                'name' => 'view_staff_any_designation',
                'display_name' => 'View Staff with Any Designation Only',
                'description' => 'View Staff with Any designation Only',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            25 => array (
                'id' => 26,
                'permission_group_id' => 5,
                'name' => 'view_all_staff',
                'display_name' => 'View All Staff',
                'description' => 'View All Staff',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            26 => array (
                'id' => 27,
                'permission_group_id' => 6,
                'name' => 'manage_project',
                'display_name' => 'Manage Project',
                'description' => 'Manage project',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            27 => array (
                'id' => 28,
                'permission_group_id' => 6,
                'name' => 'view_all_projects',
                'display_name' => 'View All Projects',
                'description' => 'View All Projects',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            28 => array (
                'id' => 29,
                'permission_group_id' => 6,
                'name' => 'view_cost_analytics',
                'display_name' => 'View Cost Analytics',
                'description' => 'View Cost Analytics',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            29 => array (
                'id' => 30,
                'permission_group_id' => 6,
                'name' => 'view_project_budget',
                'display_name' => 'View Project Budget',
                'description' => 'View Project Budget',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            30 => array (
                'id' => 31,
                'permission_group_id' => 6,
                'name' => 'view_rate_per_hr',
                'display_name' => 'View Rate per Hour',
                'description' => 'View Rate per Hour',
                'ischecker' => 0,
                'isadmin' => 0
            ),
            31 => array (
                'id' => 32,
                'permission_group_id' => 4,
                'name' => 'add_task_deliverable',
                'display_name' => 'Add Task Deliverable',
                'description' => 'For Assigned user to add task deliverable',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            32 => array (
                'id' => 33,
                'permission_group_id' => 7,
                'name' => 'mange_task_types',
                'display_name' => 'Manage Task types',
                'description' => 'Manage Task types',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            33 => array (
                'id' => 34,
                'permission_group_id' => 7,
                'name' => 'manage_task_label',
                'display_name' => 'Manage Task labels',
                'description' => 'Manage Task labels',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            34 => array (
                'id' => 35,
                'permission_group_id' => 7,
                'name' => 'manage_task_deliverable',
                'display_name' => 'Manage Task Deliverable',
                'description' => 'Manage Task Deliverable',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            35 => array (
                'id' => 36,
                'permission_group_id' => 7,
                'name' => 'manage_recurring_task',
                'display_name' => 'Manage Recurring Tasks',
                'description' => 'Manage Recurring Tasks',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            36 => array (
                'id' => 37,
                'permission_group_id' => 7,
                'name' => 'manage_project_task_tag_types',
                'display_name' => 'Manage Project Task Tag Types',
                'description' => 'Manage Project Task Tag Types',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            37 => array (
                'id' => 38,
                'permission_group_id' => 7,
                'name' => 'manage_product_and_services',
                'display_name' => 'Manage Products & Services',
                'description' => 'Manage Products & Services',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            38 => array (
                'id' => 39,
                'permission_group_id' => 7,
                'name' => 'manage_challenge_types',
                'display_name' => 'Manage Challenge Types',
                'description' => 'Manage Challenge Types',
                'ischecker' => 0,
                'isadmin' => 0
            ),


            39 => array (
                'id' => 40,
                'permission_group_id' => 7,
                'name' => 'manage_maximum_spent_hours',
                'display_name' => 'Manage Maximum working hours per day',
                'description' => 'Manage Maximum working hours per day',
                'ischecker' => 0,
                'isadmin' => 0
            ),



            40 => array (
                'id' => 41,
                'permission_group_id' => 7,
                'name' => 'manage_holidays',
                'display_name' => 'Manage Holidays',
                'description' => 'Manage Holidays',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            41 => array (
                'id' => 42,
                'permission_group_id' => 7,
                'name' => 'manage_organization',
                'display_name' => 'Manage Organization',
                'description' => 'Manage Organization',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            42 => array (
                'id' => 43,
                'permission_group_id' => 7,
                'name' => 'manage_client',
                'display_name' => 'Manage Clients',
                'description' => 'Manage Clients',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            43 => array (
                'id' => 44,
                'permission_group_id' => 7,
                'name' => 'manage_sending_system_updates',
                'display_name' => 'Manage Sending System updates',
                'description' => 'Manage Sending System updates',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            44 => array (
                'id' => 45,
                'permission_group_id' => 7,
                'name' => 'manage_announcements',
                'display_name' => 'Manage Announcements',
                'description' => 'Manage Announcements',
                'ischecker' => 0,
                'isadmin' => 0
            ),



            45 => array (
                'id' => 46,
                'permission_group_id' => 7,
                'name' => 'manage_project_types',
                'display_name' => 'Manage Project Types',
                'description' => 'Manage Project Types',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            46 => array (
                'id' => 47,
                'permission_group_id' => 7,
                'name' => 'manage_general_settings',
                'display_name' => 'Group: Manage General Settings',
                'description' => 'Manage General Settings',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            47 => array (
                'id' => 48,
                'permission_group_id' => 7,
                'name' => 'manage_task_settings',
                'display_name' => 'Group: Manage Task Settings',
                'description' => 'Manage Task Settings',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            48 => array (
                'id' => 49,
                'permission_group_id' => 7,
                'name' => 'manage_project_settings',
                'display_name' => 'Group: Manage Project Settings',
                'description' => 'Manage Project Settings',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            49 => array (
                'id' => 50,
                'permission_group_id' => 7,
                'name' => 'manage_timesheet_settings',
                'display_name' => 'Group: Manage Timesheet Settings',
                'description' => 'Manage Timesheet Settings',
                'ischecker' => 0,
                'isadmin' => 0
            ),

            50 => array (
                'id' => 51,
                'permission_group_id' => 7,
                'name' => 'setting_menu',
                'display_name' => 'View Setting Menu',
                'description' => 'View Setting menu',
                'ischecker' => 0,
                'isadmin' => 0
            ),
        ));
        $this->enableForeignKeys("permissions");

    }
}
