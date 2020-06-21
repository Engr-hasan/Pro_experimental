<?php

use Illuminate\Database\Seeder;

class HowToUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('how_to_uses')->insert([
            [
                'how_to_use_title' => 'What is HowToUse?',
                'how_to_use_description' => 'What is HowToUse?',
                'status' => 1,
            ],[
                'how_to_use_title' => 'Why important HowToUse?',
                'how_to_use_description' => 'Why important HowToUse?',
                'status' => 1,
            ],[
                'how_to_use_title' => 'Is it Important?',
                'how_to_use_description' => 'Is it Important?',
                'status' => 1,
            ]
        ]);
    }
}
