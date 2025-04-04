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
                'kategori' => 'non-iklan',
                'gambar' => 'catatan redaksi.jpg',
            ],
            [
                'topik' => 'Cerita Hidup',
                'kategori' => 'iklan',
                'gambar' => 'cerita hidup.jpg',
            ],
            [
                'topik' => 'Map Kota Malang & Bali',
                'kategori' => 'iklan',
                'gambar' => 'map malang.jpg',
            ],
            [
                'topik' => 'Kilas Wisata',
                'kategori' => 'iklan',
                'gambar' => 'kilas wisata.jpg',
            ],
            [
                'topik' => 'Kuliner',
                'kategori' => 'iklan',
                'gambar' => 'kuliner.jpg',
            ],
            [
                'topik' => 'Tips dan Solusi Sehat',
                'kategori' => 'iklan',
                'gambar' => 'solusi sehat.jpg',
            ],
            [
                'topik' => 'Peluang Usaha',
                'kategori' => 'iklan',
                'gambar' => 'peluang usaha.jpg',
            ],
            [
                'topik' => 'Jasa Titip',
                'kategori' => 'iklan',
                'gambar' => 'jasa titip.jpg',
            ],
            [
                'topik' => 'Kecantikan',
                'kategori' => 'iklan',
                'gambar' => 'kecantikan.jpg',
            ],
            [
                'topik' => 'Loker',
                'kategori' => 'iklan',
                'gambar' => 'loker.jpg',
            ],
            [
                'topik' => 'Ketenangan Jiwa',
                'kategori' => 'iklan',
                'gambar' => 'ketenangan jiwa.jpg',
            ],
            [
                'topik' => 'Jendela Promosi',
                'kategori' => 'iklan',
                'gambar' => 'jendela promosi.jpg',
            ],
            [
                'topik' => 'Laporan Khusus',
                'kategori' => 'iklan',
                'gambar' => 'laporan khusus.jpg',
            ],
        ];

        foreach ($kontens as $konten) {
            Konten::create($konten);
        }
    }
}
