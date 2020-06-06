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
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Nur',
                'email'=>'nur@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>bcrypt('12345678')
            ]

        ];

        \DB::table('users')->insert($data);
    }
}
