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
                'question_mode_id' => 1,
                'subject_name' => 'Medicine',
                'status' => 1,
            ],[
                'question_mode_id' => 1,
                'subject_name' => 'Obstetrics & Gynecology',
                'status' => 1,
            ],[
                'question_mode_id' => 2,
                'subject_name' => 'Psychiatry',
                'status' => 1,
            ]
        ]);
    }
}
