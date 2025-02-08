<?php

namespace App\Models;

use App\Models\User;
use App\Models\DetailKonten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';
    protected $guarded = ['id'];

    public function mitra()
    {
        return $this->belongsTo(User::class, 'id_mitra');
    }
    public function detail_konten()
    {
        return $this->belongsTo(DetailKonten::class, 'id_detail_konten');
    }
}
