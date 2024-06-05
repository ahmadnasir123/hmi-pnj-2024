<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Operational\Documantation;
use App\Models\Operational\Documentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumantationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create data here
        $documantation = [
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
        Documantation::insert($documantation);
    }
}
