<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_koleksi extends Model
{
    protected $primaryKey = 'id_jk';
    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'id_jk');
    }

}
