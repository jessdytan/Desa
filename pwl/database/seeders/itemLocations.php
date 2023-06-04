<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class itemLocations extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $itemLocations = [];
        $faker = Factory::create();

        for($i = 1; $i <= 5; $i++){
            $itemLocations[] = [
                'loc_id' => $faker->uuid,
                'item_id' => $faker->numberBetween(1, 5),
                'museum_id' => $faker->numberBetween(1, 5)
            ];
        }
        \DB::table('item_locations')->insert($itemLocations);
    }
}