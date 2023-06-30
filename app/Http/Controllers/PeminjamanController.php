<?php

namespace App\Http\Controllers;

use App\Http\Controller\CartController;
use App\Models\peminjaman;
use App\Http\Requests\StorepeminjamanRequest;
use App\Http\Requests\UpdatepeminjamanRequest;
use Illuminate\Http\Request;
use App\Models\koleksi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PeminjamanController extends Controller
{

    public function showCheckoutForm()
    {
        // Mendapatkan data keranjang dari session
        $cart = session()->get('cart');

        if ($cart === null || count($cart) == 0) {
            return view('cart');
        }
        // Lakukan validasi atau operasi lainnya jika diperlukan
        $peminjaman = peminjaman::all();
        // Tampilkan view checkout dan kirimkan data keranjang
        return view('peminjaman', compact('cart'));

        // $cart = session("cart");

        // return view('peminjaman', compact('peminjaman'));
    }

    public function processCheckout(Request $request)
    {
        // // Validasi input dari form checkout

        // // Simpan data pemesanan ke dalam tabel orders
        $cart = session("cart");
        $userId = Auth::id();

        // Simpan entri peminjaman baru untuk setiap item dalam keranjang
        foreach ($cart as $id => $item) {
            $peminjaman = new Peminjaman();
            $peminjaman->id_user = $userId;
            $peminjaman->id_koleksi = $id;
            $peminjaman->tanggal_peminjaman = $request->input('tanggal_peminjaman');
            $peminjaman->tanggal_pengembalian = Carbon::parse($request->input('tanggal_peminjaman'))->addWeeks(2);
            $peminjaman->save();
        }

        // Hapus data keranjang dari session
        session()->forget('cart');

        return view('berhasil');

    // Proses tindakan lain, misalnya mengirim email konfirmasi

    // Redirect ke halaman sukses atau halaman konfirmasi pemesanan
    // return redirect()->route('checkout.confirmation', $peminjaman->id);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepeminjamanRequest $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }
}
