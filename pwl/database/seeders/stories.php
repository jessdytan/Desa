<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class stories extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $stories = [];
        $faker = Factory::create();

        for($i = 1; $i <= 5; $i++){
            $stories[] = [
                'story_id' => $faker->uuid,
                'story_type' => $faker->randomElement($array = array('GALERI ONLINE', 'GALERI OFFLINE')),
                'story_name' => $faker->words(10, true),
                'description' => $faker->sentence(rand(20, 25)),
                'credits' => $faker->name,
                'museum_id' => $faker->numberBetween(1, 5)
            ];
        }
        \DB::table('stories')->insert($stories);
    }
}