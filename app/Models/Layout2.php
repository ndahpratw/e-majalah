<?php

namespace App\Models;

use App\Models\DetailKonten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layout2 extends Model
{
    use HasFactory;

    protected $table = 'layout2s';
    protected $fillable = [
        'isi_konten_1',
        'isi_konten_2',
        'isi_konten_3',
        'isi_konten_4',
        'gambar_1',
        'gambar_2',
        'gambar_3',
    ];

    public function detail_konten()
    {
        return $this->belongsTo(DetailKonten::class, 'id_detail_konten');
    }
}
