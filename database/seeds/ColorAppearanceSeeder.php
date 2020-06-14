<?php

use Illuminate\Database\Seeder;

class ColorAppearanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('apperance_colors')->insert([
           [
               'apperance_color' => '#000'
           ]
        ]);
    }
}
