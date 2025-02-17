<?php

namespace App\Models;

use App\Models\User;
use App\Models\Konten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_konten',
        'id_mitra',
        'judul',
        'sub_judul',
        'jenis_layout',
        'status',
        'status_pembayaran',
        'bukti_pembayaran',
        'berkas',
        'keterangan',
    ];

    public function konten()
    {
        return $this->belongsTo(Konten::class, 'id_konten');
    }

    public function mitra()
    {
        return $this->belongsTo(User::class, 'id_mitra');
    }
}
