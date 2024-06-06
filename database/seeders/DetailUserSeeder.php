<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagementAccess\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_user = [
            [
                'user_id'       => 1,
                'type_user_id'  => 1,
                'contact'       => null,
                'address'       => null,
                'photo'         => null,
                'gender'        => null,
                'created_at'    => '2024-03-17 00:00:00',
                'updated_at'    => '2024-03-17 00:00:00',
            ],
        ];

        DetailUser::insert($detail_user);
    }
}
