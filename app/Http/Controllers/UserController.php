<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)
    {
        // Mengambil data pengguna dari session
        $user = $request->session()->get('user');

        // Tampilkan halaman home dengan data pengguna
        return view('home', compact('user'));
    }

}
