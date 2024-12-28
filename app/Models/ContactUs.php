<?php

namespace App\Models;

use App\Models\User;
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
}
