<?php

namespace App\Models;

use App\Models\DetailKonten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layout4 extends Model
{
    use HasFactory;

    public function detail_konten()
    {
        return $this->belongsTo(DetailKonten::class, 'id_detail_konten');
    }
}
