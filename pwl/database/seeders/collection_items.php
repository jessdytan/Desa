<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class collection_items extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $collection_items = [];
        $faker = Factory::create();

        for($i = 1; $i <= 5; $i++){
            $collection_items[] = [
                'category' => $faker->randomElement($array = array(
                                  'Tugu', 'Simetri', 'Logam', 'Kanvas', 'Buah', 'Kopi',
                                  'Masakan', 'Pertanian'
                              )),
                'judul' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'creator' => $faker->name,
                'physical_location' => $faker->city,
                'publisher' => $faker->company,
                'keywords' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'rights' => $faker->name,
                'assets' => $faker->imageUrl
            ];
        }
        \DB::table('item_koleksi')->insert($collection_items);
    }
}