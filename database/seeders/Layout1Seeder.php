<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Layout1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 5) as $index) { // Using range to generate sequential numbers from 1 to 5
            DB::table('layout1s')->insert([
                'id_detail_konten' => $index, // Sequential ID (1, 2, 3, 4, 5)
                'isi_konten_1' => implode(' ', $faker->words(500)),
                'isi_konten_2' => implode(' ', $faker->words(500)),
                'isi_konten_3' => implode(' ', $faker->words(500)),
                'isi_konten_4' => implode(' ', $faker->words(500)),
                'gambar_1' => "foto1.jpg",
                'gambar_2' => "foto1.jpg",
                'gambar_3' => "foto6.png",
                'gambar_4' => "foto1.jpg",
                'gambar_5' => "foto1.jpg",
                'gambar_6' => "foto1.jpg",
                'gambar_7' => "foto1.jpg",
                'gambar_8' => "foto1.jpg",
                'gambar_9' => "foto1.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
