<?php

namespace Database\Seeders;

use App\Models\Register;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Register::create([
            'image' => '01JK8MGS7FT20MZCW0F34CGD42.png',
            'deskripsi' => 'Penerimaan Peserta Didik Baru (PPDB) 2025 telah dibuka! Simak timeline berikut untuk mengetahui tahapan dan jadwal penting.',
            'persyaratan' => [['persyaratan' => 'Punya laptop'], ['persyaratan' => 'Berkemauan tinggi']],
            // 'timeline' => '01JK8MGS7FT20MZCW0F34CGD42.png',
            'created_at' => '2025-02-04 14:06:10',
            'updated_at' => '2025-02-04 14:06:10',
        ]);
    }
}
