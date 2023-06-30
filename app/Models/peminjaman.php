<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public $timestamps = false;


    protected $table = "peminjaman";
    protected $primarykey = "id_peminjaman";
    protected $fillable = [
        "tanggal peminjaman"
    ];
    static function tambah_peminjaman(){
        $peminjaman = peminjaman::create([
            "tanggal_peminjaman" => date('Y-m-d')

        ]);

        return $peminjaman->id_peminjaman;
    }
}
