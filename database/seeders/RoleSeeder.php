<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagementAccess\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'title'      => 'Super Admin', // 1
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'Admin', // 2
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
            [
                'title'      => 'User', // 3
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',
            ],
        ];

        Role::insert($role);
    }
}
