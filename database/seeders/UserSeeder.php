<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@mail.com',
                'password' => Hash::make('SuperAdmin@12345'),
                'remember_token' => null,
                'created_at' => '2024-03-17 00:00:00',
                'updated_at' => '2024-03-17 00:00:00',

            ],
        ];

        User::insert($user);
    }
}
