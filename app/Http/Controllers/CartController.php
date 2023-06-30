<?php

namespace App\Http\Controllers;

use App\Models\detail_peminjaman;
use App\Models\koleksi;
use App\Models\peminjaman;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $koleksi = koleksi::all();
        return view("detail-koleksi")->with("koleksi", $koleksi);


    }

    public function tambah_cart($id){
        $cart = session("cart");

        $koleksi = Koleksi::find($id);

        $cart[$id]=[
            "cover_koleksi" => $koleksi->cover_koleksi,
            "judul_koleksi" => $koleksi->judul_koleksi,
            "penulis" => $koleksi->penulis,

        ];
        if(count($cart) > 3){
            return View('cartError');

        }

        session(["cart" => $cart]);

        return redirect("/cart");
    }

    public function cart(){
        $cart = session("cart");
        return view("cart")->with("cart", $cart);
    }

    public function hapus_cart($id){
        $cart = session("cart");
        unset($cart[$id]);
        session(["cart" => $cart]);
        return redirect("/cart");

    }

    public function peminjaman(){
        $cart = session("cart");
        $id_peminjaman = peminjaman::tambah_peminjaman();

        foreach($cart as $ct){
            $id = $ct;
            detail_peminjaman::tambah_detail_peminjaman($id, $id_peminjaman);

        }

        session()->forget('cart');

        return redirect("/cart");



    }
}
