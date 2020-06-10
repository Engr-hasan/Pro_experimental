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
           ],[
                'subject_id' => 1,
               'system_name' => 'Biostatistics & Epidemiology',
                'status' => 1,
           ],[
                'subject_id' => 2,
               'system_name' => 'Cardiovascular System',
                'status' => 1,
           ]
        ]);
    }
}
