<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials =[
            'username' => $request->username,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            return redirect('/home');
        }

        return redirect()->back()->withErrors(['username' => 'invalid username']);

    }


    public function logout(){
        // Auth::logout();
        auth()->logout();
        return redirect()->route('login')->with('berhasil  logout');
    }


}
