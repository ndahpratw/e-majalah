<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ContactUs;
use App\Models\DetailKonten;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mitraUsers = User::where('role', 'Mitra')->get();
        $detailKontens = DetailKonten::all(); // Mengambil semua data dari tabel DetailKonten
        $detailKontenCount = $detailKontens->count(); // Hitung jumlah data di DetailKonten

        if ($detailKontenCount === 0) {
            $this->command->warn('Tidak ada data di tabel DetailKonten. Seeder tidak dijalankan.');
            return;
        }

        $data = [
            [
                'catatan' => 'Mohon bantuan untuk memperbaiki deskripsi produk saya.',
            ],
            [
                'catatan' => 'Bagaimana cara meningkatkan penjualan dengan promosi?',
            ],
            [
                'catatan' => 'Ada masalah pada sistem pembayaran, mohon panduan.',
            ],
            [
                'catatan' => 'Butuh informasi lebih lanjut tentang peluang usaha baru.',
            ],
            [
                'catatan' => 'Apa saja syarat untuk mendapatkan layanan premium?',
            ],
        ];

        foreach ($mitraUsers as $index => $user) {
            if (isset($data[$index])) {
                // Ambil id_detail_konten berdasarkan index yang looping dengan modulus untuk mengulang jika melebihi jumlah data
                $idDetailKonten = $detailKontens[$index % $detailKontenCount]->id;

                ContactUs::create([
                    'id_mitra' => $user->id,
                    'id_detail_konten' => $idDetailKonten,
                    'catatan' => $data[$index]['catatan'],
                ]);
            }
        }
    }
}
