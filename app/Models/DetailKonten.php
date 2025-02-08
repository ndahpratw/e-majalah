<?php

namespace App\Models;

use App\Models\Konten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailKonten extends Model
{
    use HasFactory;

    protected $table = 'detail_kontens';
    protected $fillable = [
        'id_mitra',
        'judul',
        'sub_judul',
    ];

    public function konten()
    {
        return $this->belongsTo(Konten::class, 'id_konten');
    }
}
