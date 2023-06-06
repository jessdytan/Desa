<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'judul' => 'berita 1',
            'konten' => 'Luthfi pembantai galat',
            'slug' => 'berita-1',
            'excerpt' => 'luthfi',
            'gambar' => 'a',
            'tanggal_upload' => now(),
        ]);
    }
}
