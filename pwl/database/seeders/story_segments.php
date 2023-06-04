<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class story_segments extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $story_segments = [];
        $faker = Factory::create();

        for($i = 1; $i <= 5; $i++){
            $story_segments[] = [
                'segment_id' => $faker->uuid,
                'story_id' => $faker->uuid,
                'information' => $faker->paragraphs($nb = 3, $asText = true),
                'cover_segment_url' => $faker->imageUrl($width = 640, $height = 480),
                'segment_text' => $faker->text
            ];
        }
        \DB::table('story_segments')->insert($story_segments);
    }
}