<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subjects')->insert([
            [
                'subject_name' => 'Preventative Medicine',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
            ],[
                'subject_name' => 'Surgery and Pediatrics',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
            ],[
                'subject_name' => 'Internal medicine',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
            ],[
                'subject_name' => 'Obgyn and Psychiatry',
                'status' => 1,
                'created_at' => '2020-06-23 06:28:24',
                'updated_at' => '2020-06-23 06:28:24',
            ]
        ]);
    }
}
