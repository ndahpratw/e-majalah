<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Layout5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        foreach (range(1, 5) as $index) { // Using range to generate numbers from 1 to 5
            $id_detail_konten = $index + 20; // Adding an offset to start from 6
        
            DB::table('layout5s')->insert([
                'id_detail_konten' => $id_detail_konten, 
                'isi_konten_1' => implode(' ', $faker->words(500)),
                'isi_konten_2' => implode(' ', $faker->words(500)),
                'isi_konten_3' => implode(' ', $faker->words(500)),
                'isi_konten_4' => implode(' ', $faker->words(500)),
                'isi_konten_5' => implode(' ', $faker->words(500)),
                'gambar_1' => "foto1.jpg",
                'gambar_2' => "foto1.jpg",
                'gambar_3' => "foto1.jpg",
                'gambar_4' => "foto1.jpg",
                "quote" => "Menjadi sukses itu sulit. Tapi lebih sulit lagi kalau kita tidak sukses.",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
