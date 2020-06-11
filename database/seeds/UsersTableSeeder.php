<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Super Admin',
                'email'=>'super_admin@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678')
            ]
        ];

        \DB::table('users')->insert($data);
    }
}
