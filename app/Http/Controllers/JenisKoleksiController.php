<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\jenis_koleksi;
use App\Models\koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisKoleksi;
// use Doctrine\DBAL\Schema\View;

class JenisKoleksiController extends Controller
{
    public function index()
    {
        $jeniskoleksi = jenis_koleksi::all();
        $koleksis = Koleksi::all();


        return view('koleksi', compact('jeniskoleksi', 'koleksis'));
    }

    public function show($id_jk)
    {


        $jeniskoleksi = jenis_koleksi::find($id_jk);

        return view('koleksi', compact('jeniskoleksi'));
    }
}
