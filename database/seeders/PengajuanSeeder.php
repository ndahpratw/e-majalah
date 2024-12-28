<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ContactUs;
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
                ContactUs::create([
                    'id_mitra' => $user->id,
                    'catatan' => $data[$index]['catatan'],
                ]);
            }
        }
    }
}
