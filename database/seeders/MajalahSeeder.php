<?php

namespace Database\Seeders;

use App\Models\Majalah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MajalahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Catatan Redaksi',
                'ringkasan_konten' => 'Tulisan kata dari kita.',
                'konten' => 'Edisi ini diawali dengan catatan redaksi yang menginspirasi pembaca untuk terus berkarya.',
                'gambar' => 'catatan_redaksi.jpg',
            ],
            [
                'judul' => 'Cerita Hidup',
                'ringkasan_konten' => 'Cerpen yang menyentuh hati.',
                'konten' => 'Cerpen dalam edisi ini menggambarkan perjuangan hidup yang penuh makna.',
                'gambar' => 'cerita_hidup.jpg',
            ],
            [
                'judul' => 'Map Kota Malang dan Bali',
                'ringkasan_konten' => 'Peta Malang dan Bali.',
                'konten' => 'Panduan lengkap peta wisata dan lokasi strategis di Malang dan Bali.',
                'gambar' => 'map_malang_bali.jpg',
            ],
            [
                'judul' => 'Kilas Wisata',
                'ringkasan_konten' => 'Ulasan tempat wisata.',
                'konten' => 'Rekomendasi destinasi wisata terbaru yang wajib dikunjungi.',
                'gambar' => 'kilas_wisata.jpg',
            ],
            [
                'judul' => 'Kuliner',
                'ringkasan_konten' => 'Ulasan kuliner khas.',
                'konten' => 'Ragam kuliner Nusantara yang menggugah selera.',
                'gambar' => 'kuliner.jpg',
            ],
            [
                'judul' => 'Tip dan Solusi Sehat',
                'ringkasan_konten' => 'Cara hidup sehat dan trik sehat.',
                'konten' => 'Panduan menjaga kesehatan dengan langkah-langkah sederhana namun efektif.',
                'gambar' => 'tip_sehat.jpg',
            ],
            [
                'judul' => 'Peluang Usaha',
                'ringkasan_konten' => 'Ulasan usaha yang lagi trend.',
                'konten' => 'Edisi ini membahas peluang bisnis menarik yang dapat dikelola sendiri.',
                'gambar' => 'peluang_usaha.jpg',
            ],
            [
                'judul' => 'Jasa Titip',
                'ringkasan_konten' => 'Khas Malang dan Bali.',
                'konten' => 'Layanan jasa titip untuk produk khas Malang dan Bali.',
                'gambar' => 'jasa_titip.jpg',
            ],
            [
                'judul' => 'Kecantikan',
                'ringkasan_konten' => 'Tips selalu awet muda.',
                'konten' => 'Rahasia kecantikan alami untuk tetap tampil muda dan segar.',
                'gambar' => 'kecantikan.jpg',
            ],
            [
                'judul' => 'Loker',
                'ringkasan_konten' => 'Info pekerjaan terbaru.',
                'konten' => 'Informasi lowongan pekerjaan dari berbagai sektor.',
                'gambar' => 'loker.jpg',
            ],
            [
                'judul' => 'Ketenangan Jiwa',
                'ringkasan_konten' => 'Siraman qolbu untuk ketenangan.',
                'konten' => 'Artikel inspiratif untuk membantu menemukan ketenangan batin.',
                'gambar' => 'ketenangan_jiwa.jpg',
            ],
            [
                'judul' => 'Jendela Promosi',
                'ringkasan_konten' => 'Produk dan kuliner pilihan.',
                'konten' => 'Promosi produk unggulan dan kuliner yang menggoda.',
                'gambar' => 'jendela_promosi.jpg',
            ],
            [
                'judul' => 'Laporan Khusus',
                'ringkasan_konten' => '(Belum tahu).',
                'konten' => 'Edisi khusus dengan laporan mendalam yang akan segera diperbarui.',
                'gambar' => 'laporan_khusus.jpg',
            ],
        ];

        foreach ($data as $item) {
            Majalah::create($item);
        }
    }
}
