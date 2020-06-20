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
                'subject_name' => 'Medicine',
                'status' => 1,
            ],[
                'subject_name' => 'Obstetrics & Gynecology',
                'status' => 1,
            ],[
                'subject_name' => 'Psychiatry',
                'status' => 1,
            ]
        ]);
    }
}
