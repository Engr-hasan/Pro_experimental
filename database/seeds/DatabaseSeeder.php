<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AccessControllerTableSeeder::class);
        $this->call(RoutePermitsTableSeeder::class);
        $this->call(QuestionModeSeeder::class);
        $this->call(SystemSeeder::class);
        $this->call(SubjectSeeder::class);
    }
}
