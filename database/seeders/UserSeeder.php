<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 5) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'no_telepon' => $faker->phoneNumber,
                'role' => $faker->randomElement(['Admin', 'Mitra']),
                'address' => $faker->address,
                'instansi' => $faker->name,
                'password' => Hash::make('password'), // default password
            ]);
        }

        DB::table('users')->insert([
            [
                'name' => 'Jeffri Nichole',
                'email' => 'admin@gmail.com',
                'no_telepon' => '6282132331948',
                'role' => 'Admin',
                'address' => 'Jl. Raya Madura',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Angelina Jolie',
                'email' => 'mitra@gmail.com',
                'no_telepon' => '6282132331948',
                'role' => 'Mitra',
                'address' => 'Jl. Raya Madura',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
