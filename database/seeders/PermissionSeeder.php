<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagementAccess\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            // dashboard
            [
                'title'      => 'dashboard_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            // user
            [
                'title'      => 'user_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'user_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'user_create',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'user_edit',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'user_show',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'user_delete',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            // permission
            [
                'title'      => 'permission_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'permission_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            // role
            [
                'title'      => 'role_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'role_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'role_create',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'role_edit',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'role_show',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'role_delete',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            // type user
            [
                'title'      => 'type_user_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'type_user_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            // category
            [
                'title'      => 'category_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'category_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'category_create',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'category_edit',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'category_show',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'category_delete',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            
            // employee
            [
                'title'      => 'employee_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'employee_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'employee_create',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'employee_edit',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'employee_show',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'employee_delete',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'employee_export',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],

            // management
            [
                'title'      => 'management_access',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'management_table',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'management_show',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'management_export',
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            
            // documantation
            [
                'title' => 'documantation_access',
                'created_at' => '2024-05-17 00:00:00',
                'updated_at' => '2024-05-17 00:00:00',
            ],
            [
                'title' => 'documantation_table',
                'created_at' => '2024-05-17 00:00:00',
                'updated_at' => '2024-05-17 00:00:00',
            ],
            [
                'title' => 'documantation_create',
                'created_at' => '2024-05-17 00:00:00',
                'updated_at' => '2024-05-17 00:00:00',
            ],
            [
                'title' => 'documantation_edit',
                'created_at' => '2024-05-17 00:00:00',
                'updated_at' => '2024-05-17 00:00:00',
            ],
            [
                'title' => 'documantation_show',
                'created_at' => '2024-05-17 00:00:00',
                'updated_at' => '2024-05-17 00:00:00',
            ],
            [
                'title' => 'documantation_delete',
                'created_at' => '2024-05-17 00:00:00',
                'updated_at' => '2024-05-17 00:00:00',
            ],
        ];

        Permission::insert($permission);
    }
    
}
