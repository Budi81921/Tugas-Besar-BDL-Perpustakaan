<?php

namespace App\Http\Controllers;


use App\Models\user;
use App\Models\detail_peminjaman;
use Illuminate\Support\Facades\Auth;
use App\Models\peminjaman;
use App\Http\Requests\Storedetail_peminjamanRequest;
use App\Http\Requests\Updatedetail_peminjamanRequest;
use Illuminate\Support\Facades\DB;


class DetailPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function show()
    {
        $peminjaman = DB::table('peminjaman')
        ->join('koleksis', 'peminjaman.id_koleksi', '=', 'koleksis.id')
        ->select('peminjaman.*', 'koleksis.*')
        ->get();
        return view('listpeminjaman', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createInvoice()
    {
        $detail_peminjaman = new detail_peminjaman();
        $detail_peminjaman->id_detail_peminjaman = uniqid(); // Misalnya, fungsi untuk menghasilkan nomor invoice
        $detail_peminjaman->id = Auth::user()->id; // ID pengguna yang login
        $detail_peminjaman->id_peminjaman; // data peminjaman

        // Simpan invoice ke dalam database
        $detail_peminjaman->save();

        // Proses lain setelah pembuatan invoice, seperti mengirim email, dll.

        // Redirect atau tampilkan halaman konfirmasi invoice kepada pengguna
        return view('checkout.confirmation', compact('invoice'));



    }

    public function showInvoice(detail_peminjaman $detail_peminjaman)
    {
        // Ambil data invoice berdasarkan parameter yang diberikan
        $detail_peminjaman = detail_peminjaman::findOrFail($detail_peminjaman->id_detail_peminjaman);

        // Tampilkan view dengan data invoice
        return view('checkout.invoice', compact('invoice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storedetail_peminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(detail_peminjaman $detail_peminjaman)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detail_peminjaman $detail_peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedetail_peminjamanRequest $request, detail_peminjaman $detail_peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detail_peminjaman $detail_peminjaman)
    {
        //
    }
}
