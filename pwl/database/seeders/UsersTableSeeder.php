<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();

        \Db::table('users')->insert([
            [
                'name' => "andy",
                'email' => "andy@gmail.com",
                'password'=>bcrypt('satu')
            ],
            [
                'name' => "ivan",
                'email' => "ivan@gmail.com",
                'password'=>bcrypt('dua')
            ],
            [
                'name' => "cici",
                'email' => "cici@gmail.com",
                'password'=>bcrypt('tiga')
            ],
        ]);
    }
}
