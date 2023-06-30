@extends('layout')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice</title>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="invoice.css" rel ='stylesheet'>
</head>
<body>
    <ul class = "Invoice">
        <li class ="kotak-invoice">


            <div class ="logojudul">
                <img src="logouai.png" alt="Logoperpus">
            </div>
            <hr>

            <div class ="id-peminjaman">

                /* start awal*/
                {{-- <p class="tulisan-1">Id Peminjaman :</p>
                <p class="tulisan-2">0123123134413413414</p>
            </div>

            <div class ="kotak-biodata">
                @foreach ($detail as $user)


                <h1 class ="judul">Biodata :</h1>
                <div class ="isi-kb-1">
                    <p class ="isi-kb-1-1">NIM :</p>
                    <p class ="isi-kb-1-2">{{$user["username"]}}</p>
                </div>
                <div class ="isi-kb-3">
                    <p class ="isi-kb-3-1">Alamat :</p>
                    <p class ="isi-kb-3-2"> {{$user["alamat"]}} </p>
                </div>
                @endforeach
            </div> --}}

            <div class ="rincian-pinjaman">
                <h1 class="judul-rp-1">Rincian Pinjaman</h1>
                @foreach ( $peminjaman as $ct )
                <div class="kotak-rp">
                    <div class="no">
                        <ul class ="nomor">
                            <li class="judul-n-1"><h2>NO {{count($ct)}} </h2></li>
                        </ul>
                    </div>
                    <div class="id-buku">
                        <ul class ="id-b">
                            <li class="judul-ib-1"><h2>Id-Buku</h2></li>
                            <li class="isi-b-1"><p> {{$ct->id}} </p></li
                        </ul>
                    </div>
                    <div class="jd-buku">
                        <ul class ="jd-b">
                            <li class="judul-jdb-1"><h2>Judul Buku</h2></li>
                            <li class="isi-jdb-1"><p> {{$ct->judul_koleksi}} </p></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class ="waktu-peminjaman-1">

                @foreach ( $peminjaman as $p )


                <div class ="tanggal-pinjam-1">
                    <p class ="tanggal-pi-1">Tanggal Pinjaman :</p>
                    <p class ="isi-t-1">{{$p->tanggal_peminjaman}}</p>
                </div>
                <div class ="tanggal-pinjam-1">
                    <p class ="tanggal-pi-2">Tanggal Pengembalian :</p>
                    <p class ="isi-t-2">{{$p->tanggal_pengembalian}}</p>
                </div>
                @endforeach
            </div> --}}

            <div class ="tombol-back">
                <button class="back-to">
                    <i class="fa-solid fa-circle-left" style="color: #ffffff;"></i>
                    <p>Back to profile</p>
                </button>
            </div>
        </li>
    </ul>
</body>
</html>

@endsection
