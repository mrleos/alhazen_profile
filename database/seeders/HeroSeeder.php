<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'title' => 'Tempat Belajar Coding & Animasi Terbaik di Kendari',
            'content' => 'Yuk Belajar Coding dan Animasi Bareng dengan metode belajar online, offline',
            'image' => '01JK8MGS7FT20MZCW0F34CGD42.png',
            'created_at' => '2025-02-04 14:06:10',
            'updated_at' => '2025-02-04 14:06:10',
        ]);
    }
}
