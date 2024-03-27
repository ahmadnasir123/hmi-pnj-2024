<?php

namespace Database\Seeders;

use App\Models\Operational\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create data here
        $employee = [
            // 'user_id' => 1,
            'name' => 'employee1',
            'angkatan' => '2020',
            'lk1' => 'hmi-pnj',
            'tahun_1' => '2020-01-01',
            'lk2' => 'hmi-pnj',
            'tahun_2' => '2020-01-01',
            'lk3' => 'hmi-pnj',
            'tahun_3' => '2020-01-01',

        ];

        // this array $employee will be insert to table employee
        Employee::insert($employee);
    }
}
