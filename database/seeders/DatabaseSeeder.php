<?php

namespace Database\Seeders;

use Database\Seeders\ReferenceDataSeeder;
use Database\Seeders\FormFieldsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ReferenceDataSeeder::class,
            FormFieldsSeeder::class
        ]);
    }
}
