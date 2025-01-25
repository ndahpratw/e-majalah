<?php

namespace App\Models;

use App\Models\DetailKonten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layout3 extends Model
{
    use HasFactory;

    protected $table = 'layout3s';
    protected $fillable = [
        'isi_konten_1',
        'isi_konten_2',
        'isi_konten_3',
        'isi_konten_4',
        'isi_konten_5',
        'isi_konten_6',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'gambar_5',
        'gambar_6',
        'gambar_7',
        'gambar_8',
        'gambar_9',
        'gambar_10',
        'gambar_11',
    ];

    public function detail_konten()
    {
        return $this->belongsTo(DetailKonten::class, 'id_detail_konten');
    }
}
