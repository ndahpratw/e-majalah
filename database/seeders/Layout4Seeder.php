<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Layout4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $availableDetailKontenIds = DB::table('detail_kontens')->pluck('id')->toArray(); // Get all available 'id_detail_konten'
        $usedIds = []; // Keep track of used ids
        
        foreach (range(1, 5) as $index) {
            $randomId = $faker->randomElement(array_diff($availableDetailKontenIds, $usedIds)); // Get a random unused id
            $usedIds[] = $randomId; // Mark this id as used
        
            DB::table('layout4s')->insert([
                'id_detail_konten' => $randomId, // Assign the unique id
                'isi_konten_1' => implode(' ', $faker->words(500)),
                'isi_konten_2' => implode(' ', $faker->words(500)),
                'isi_konten_3' => implode(' ', $faker->words(500)),
                'isi_konten_4' => implode(' ', $faker->words(500)),
                'gambar_1' => "foto6.png",
                'gambar_2' => "foto1.jpg",
                'gambar_3' => "foto6.png",
                'gambar_4' => "foto1.jpg",
                'gambar_5' => "foto1.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
