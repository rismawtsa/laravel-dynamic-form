<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenceDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reference_data')->insert([
            [
                'key' => 'GENDER',
                'id' => 'M',
                'name' => 'Male'
            ],
            [
                'key' => 'GENDER',
                'id' => 'F',
                'name' => 'Female'
            ],
            [
                'key' => 'CITY',
                'id' => 'jakarta',
                'name' => 'Jakarta'
            ],
            [
                'key' => 'CITY',
                'id' => 'bandung',
                'name' => 'Bandung'
            ],
            [
                'key' => 'CITY',
                'id' => 'surabaya',
                'name' => 'Surabaya'
            ],
            [
                'key' => 'CITY',
                'id' => 'makassar',
                'name' => 'Makassar'
            ],
            [
                'key' => 'SKILLS',
                'id' => 'php',
                'name' => 'PHP'
            ],
            [
                'key' => 'SKILLS',
                'id' => 'java',
                'name' => 'Java'
            ],
            [
                'key' => 'SKILLS',
                'id' => 'nodejs',
                'name' => 'NodeJs'
            ],
            [
                'key' => 'SKILLS',
                'id' => 'react',
                'name' => 'React'
            ],
            [
                'key' => 'SKILLS',
                'id' => 'mysql',
                'name' => 'MySQL'
            ]
        ]);
    }
}
