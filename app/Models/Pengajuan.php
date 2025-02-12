<?php

namespace App\Models;

use App\Models\User;
use App\Models\Konten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    use HasFactory;

    public function konten()
    {
        return $this->belongsTo(Konten::class, 'id_konten');
    }

    public function mitra()
    {
        return $this->belongsTo(User::class, 'id_mitra');
    }
}
