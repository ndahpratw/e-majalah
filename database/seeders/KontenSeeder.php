<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Konten;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kontens = [
            [
                'topik' => 'Catatan Redaksi',
                'gambar' => 'catatan redaksi.jpg',
            ],
            [
                'topik' => 'Cerita Hidup',
                'gambar' => 'cerita hidup.jpg',
            ],
            [
                'topik' => 'Map Kota Malang & Bali',
                'gambar' => 'map malang.jpg',
            ],
            [
                'topik' => 'Kilas Wisata',
                'gambar' => 'kilas wisata.jpg',
            ],
            [
                'topik' => 'Kuliner',
                'gambar' => 'kuliner.jpg',
            ],
            [
                'topik' => 'Tips dan Solusi Sehat',
                'gambar' => 'solusi sehat.jpg',
            ],
            [
                'topik' => 'Peluang Usaha',
                'gambar' => 'peluang usaha.jpg',
            ],
            [
                'topik' => 'Jasa Titip',
                'gambar' => 'jasa titip.jpg',
            ],
            [
                'topik' => 'Kecantikan',
                'gambar' => 'kecantikan.jpg',
            ],
            [
                'topik' => 'Loker',
                'gambar' => 'loker.jpg',
            ],
            [
                'topik' => 'Ketenangan Jiwa',
                'gambar' => 'ketenangan jiwa.jpg',
            ],
            [
                'topik' => 'Jendela Promosi',
                'gambar' => 'jendela promosi.jpg',
            ],
            [
                'topik' => 'Laporan Khusus',
                'gambar' => 'laporan khusus.jpg',
            ],
        ];

        foreach ($kontens as $konten) {
            Konten::create($konten);
        }
    }
}
