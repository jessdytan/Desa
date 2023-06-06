<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
           'nama' => 'rifqi',
           'email' => 'rifqi@gmail.com',
           'nik' => '221402031',
           'no_hp' => '081251428417',
           'password' => bcrypt('123'), 
        ]);

        $this ->call(CategoryTableSeeder::class);
        $this ->call(AdminTableSeeder::class);
        $this ->call(BeritaTableSeeder::class);
    }
}
