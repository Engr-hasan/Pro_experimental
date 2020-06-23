<?php

use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('systems')->insert([
           [
               'subject_id' => 1,
               'system_name' => 'Allergy & Immunology',
               'status' => 1,
               'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 2,
               'system_name' => 'Biostatistics & Epidemiology',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Cardiovascular System',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 1,
               'system_name' => 'Dermatology',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Ear, Nose & Throat (ENT)',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Endocrine, Diabetes & Metabolism',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Female Reproductive System & Breast',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 2,
               'system_name' => 'Gastrointestinal & Nutrition',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'General Principles',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Hematology & Oncology',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 2,
               'system_name' => 'Infectious Diseases',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 1,
               'system_name' => 'Male Reproductive System',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Miscellaneous (Multisystem)',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 4,
               'system_name' => 'Nervous System',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Ophthalmology',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 1,
               'system_name' => 'Poisoning & Environmental Exposure',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 4,
               'system_name' => 'Pregnancy, Childbirth & Puerperium',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 2,
               'system_name' => 'Psychiatric/Behavioral & Substance Abuse',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 4,
               'system_name' => 'Pulmonary & Critical Care',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 2,
               'system_name' => 'Renal, Urinary Systems & Electrolytes',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 1,
               'system_name' => 'Rheumatology/Orthopedics & Sports',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ],[
                'subject_id' => 3,
               'system_name' => 'Social Sciences (Ethics/Legal/Professional',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
           ]
        ]);
    }
}
