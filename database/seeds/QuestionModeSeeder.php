<?php

use Illuminate\Database\Seeder;

class QuestionModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('question_modes')->insert([
           [
               'name' => 'Unused'
           ]
        ]);
    }
}
