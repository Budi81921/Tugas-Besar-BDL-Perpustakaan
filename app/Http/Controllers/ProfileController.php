<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profil', ['user' => $user]);
    }
}
