<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{

    protected $fillable = ['judul_koleksi', 'deskripsi_koleksi', 'penulis', 'penerbit'];

    public function jenisKoleksi()
    {
        return $this->belongsTo(JenisKoleksi::class);
    }

}
