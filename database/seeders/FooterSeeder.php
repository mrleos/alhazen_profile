<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footers')->insert([
            'description' => 'Alhazen Academy adalah lembaga kursus coding & animasi terkemuka di Kendari yang berkomitmen memberikan pendidikan teknologi berkualitas dengan metode pembelajaran modern.',
            'address' => 'Jl. Pendidikan No. 123 Kendari, Sulawesi Tenggara',
            'email' => 'info@alhazen.ac.id',
            'phone' => '(0401) 123 4567',
            'instagram' => 'https://www.instagram.com/alhazenacademy/',
            'facebook' => 'https://www.facebook.com/alhazenacademy/',
            'linkedin' => 'https://www.linkedin.com/company/alhazen-academy',
            'youtube' => 'https://www.youtube.com/@alhazenacademy/videos',
            'created_at' => Carbon::parse('2025-02-05 02:47:10'),
            'updated_at' => Carbon::parse('2025-02-05 02:56:06'),
        ]);
    }
}
