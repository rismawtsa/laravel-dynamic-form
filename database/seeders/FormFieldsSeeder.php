<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form_fields')->insert([
            [
                'id' => 'job_application_1',
                'group' => 'job_application',
                'type' => 'text',
                'label'=> 'Full Name',
                'name'=> 'name',
                'is_required' => true,
                'placeholder'=> null,
                'options' => null
            ],
            [
                'id' => 'job_application_2',
                'group' => 'job_application',
                'type' => 'text',
                'label'=> 'Surname',
                'name'=> 'surname',
                'is_required' => true,
                'placeholder'=> null,
                'options' => null
            ],
            [
                'id' => 'job_application_3',
                'group' => 'job_application',
                'type' => 'radio',
                'label'=> 'Gender',
                'name'=> 'gender',
                'is_required' => true,
                'placeholder'=> null,
                'options' => 'GENDER'
            ],
            [
                'id' => 'job_application_4',
                'group' => 'job_application',
                'type' => 'number',
                'label'=> 'Age',
                'name'=> 'age',
                'is_required' => false,
                'placeholder'=> 'eg. 27',
                'options' => null
            ],
            [
                'id' => 'job_application_5',
                'group' => 'job_application',
                'type' => 'combobox',
                'label'=> 'City',
                'name'=> 'city',
                'is_required' => true,
                'placeholder'=> null,
                'options' => 'CITY'
            ],
            [
                'id' => 'job_application_6',
                'group' => 'job_application',
                'type' => 'textarea',
                'label'=> 'Address',
                'name'=> 'address',
                'is_required' => false,
                'placeholder'=> 'eg. Jln. merdeka barat no. 9',
                'options' => null
            ],
            [
                'id' => 'job_application_7',
                'group' => 'job_application',
                'type' => 'checkbox',
                'label'=> 'Skills',
                'name'=> 'skills',
                'is_required' => true,
                'placeholder'=> null,
                'options' => 'SKILLS'
            ],
            [
                'id' => 'job_application_8',
                'group' => 'job_application',
                'type' => 'file',
                'label'=> 'Resume',
                'name'=> 'resume',
                'is_required' => true,
                'placeholder' => 'Upload your resume',
                'options' => null
            ]
            ]);
    }
}
