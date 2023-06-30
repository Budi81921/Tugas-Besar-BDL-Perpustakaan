<?php

namespace App\Http\Controllers;

use App\Models\detail_peminjaman;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function generateInvoice($checkout)
    {
        // Gunakan data checkout untuk mengisi informasi invoice
        $id_peminjaman =
        $id = 

        // Simpan Invoice ke Database
        $invoice = new detail_peminjaman();
        $invoice->id_peminjaman = $id_peminjaman;
        $invoice->id =$id;
        $invoice->save();

        return view('invoice', compact('invoiceNumber', 'date', 'items', 'subtotal', 'tax', 'total'));
    }
}
