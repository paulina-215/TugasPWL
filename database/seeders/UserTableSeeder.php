<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'ester',
                'email'=> 'ajaester@gmmail.com',
                'password' =>bcrypt('rahasia')
            ],
            [
                'name' => 'sule',
                'email'=> 'suleprik@gmail.com',
                'password' =>bcrypt('obeng')
            ],
            [
                'name' => 'anwar',
                'email'=> 'anwarjoo@gmail.com',
                'password' =>bcrypt('rahasia')
            ],
        ]
            
        );
    }
}
