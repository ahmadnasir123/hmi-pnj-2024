<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Operational\Documentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create data here
        $documentation = [
            [
                'title' => 'Documentation 1',
                'photo' => null,
            ],
            [
                'title' => 'Documentation 2',
                'photo' => null,
            ],
            [
                'title' => 'Documentation 3',
                'photo' => null,
            ],
        ];

        // this array $documentation will be insert to table documentation
        Documentation::insert($documentation);
    }
}
