<?php

namespace Database\Seeders;

use App\Models\DetailKonten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DetailKontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 30) as $index) {
            DetailKonten::create([
                'id_konten' => rand(1,10),
                'judul' => $faker->sentence(3),
                'sub_judul' => $faker->sentence(3),
            ]);
        }
    }
}
