<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
            UserSeeder::class,
            KontenSeeder::class,
            DetailKontenSeeder::class,
            Layout1Seeder::class,
            Layout2Seeder::class,
            Layout3Seeder::class,
            Layout4Seeder::class,
            Layout5Seeder::class,
            Layout6Seeder::class,
            PengajuanSeeder::class,
        ]);
    }
}
