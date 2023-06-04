<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class museum extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $museum = [];
        $faker = Factory::create();

        for($i = 1; $i <= 5; $i++){
            $museum[] = [
                'nama_museum' => $faker->name,
                'lokasi' => $faker->state,
                'gambar' => $faker->imageUrl($width = 640, $height = 480),
                'deskripsi' => $faker->sentence(rand(20, 25)),
                'media_sosial' => $faker->randomElement($array = array('facebook', 'instagram', 'tiktok', 'michat', 'twitter')),
                'alamat' => $faker->address,
                'jam_operasional' => $faker->time($format = 'H:i:s', $max = 'now'),
                'web_url' => $faker->url,
                'latitude' => $faker->latitude($min = -90, $max = 90),
                'longitude' => $faker->longitude($min = -180, $max = 180)
            ];
        }
        \DB::table('museum')->insert($museum);
    }
}