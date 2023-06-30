<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_peminjaman extends Model
{
    protected $table = "detail_peminjaman";
    protected $primarykey = "id_detail_peminjaman";

    protected $fillable =[
        'id_peminjaman', 'id'
    ];

    static function tambah_detail_peminjaman($id_peminjaman, $id){
        detail_peminjaman::create([
            'id_peminjaman' => $id_peminjaman,
            'id' => $id
        ]);
    }
}
