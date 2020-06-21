<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
            [
                'faq_title' => 'What is FAQ?',
                'faq_description' => 'What is FAQ?',
                'status' => 1,
            ],[
                'faq_title' => 'Why important FAQ?',
                'faq_description' => 'Why important FAQ?',
                'status' => 1,
            ],[
                'faq_title' => 'Is it Important?',
                'faq_description' => 'Is it Important?',
                'status' => 1,
            ]
        ]);
    }
}
