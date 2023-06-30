<?php

namespace App\Http\Controllers;

use App\Models\jenis_koleksi;
use App\Models\koleksi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KoleksiController extends Controller
{


    public function jk()
    {
        $jenis_koleksi = jenis_koleksi::all();
        return view('koleksi', compact('jenis_koleksi'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search'); // Mendapatkan input pencarian dari form

        // Melakukan pencarian pada model
        $results = Koleksi::where('judul_koleksi', 'like', '%'.$search.'%')->get();

        return view('hasil', compact('results'));
    }


    public function show(string $id): View
    {

        $koleksi = Koleksi::find( $id);

        return view('detail-koleksi', compact('koleksi'));

    }


    public function list() {}

}
