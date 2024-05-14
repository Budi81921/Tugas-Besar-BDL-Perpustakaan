<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamanSController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisKoleksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DetailPeminjamanController;
use App\Http\Controllers\PeminjamanS;
use Doctrine\DBAL\Driver\Middleware;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//user



Route::get('/profil', [ UserController::class,'home']);

//koleksi

Route::get('/koleksis', [JenisKoleksiController::class, 'index']);
Route::get('/koleksi/search',[KoleksiController::class, 'search'])->name('search');
Route::get('/jenis-koleksi/{id}', [JenisKoleksiController::class, 'show'])->name('jenis-koleksi');


//detail-koleksi
Route::resource('/detail-koleksi', \App\Http\Controllers\KoleksiController::class);

//login

Route::group(['middleware' => 'guest'], function (){
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('login');
});

Route::group(['middleware' => ['auth']], function (){
    //home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'] );
});

//


//profil


//keranjang
Route::get('/cart/tambah/{id}', [CartController::class, 'tambah_cart'])->where("id", "[0-9+]");
Route::get('/cart/hapus/{id}', [CartController::class, 'hapus_cart'])->where("id", "[0-9+]");
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/peminjaman/tambah', [CartController::class, 'peminjaman'])->middleware('auth');
Route::get('/cartErr', function(){
    return view('cartError');
});

//transaksi
Route::get('/checkout', [PeminjamanController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout/process', [PeminjamanController::class, 'processCheckout'])->name('checkout.process');
Route::get('/checkout/confirmation', [PeminjamanController::class, 'showConfirmation'])->name('checkout.confirmation');

//list-peminjaman
Route::get('/list-peminjaman', [DetailPeminjamanController::class, 'show'])->name('invoice');

//profil
Route::get('/profil',[ProfileController::class, 'index'] )->name('profil');

// Route::get('/invoice/{invoice}', [DetailPeminjamanController::class, 'createInvoice'])->name('detail.show');



// });

// admin route
Route::resource('/admin', AdminController::class);
Route::get('/admin/peminjaman', [AdminController::class, 'peminjaman'])->name('admin.peminjaman');
Route::get('/admin/statistik', [AdminController::class, 'statistikPeminjaman'])->name('admin.statistik');

