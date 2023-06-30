<!DOCTYPE html>
<html lang="Indonesia">
<head>
    <title>detail-Koleksi</title>
    <link rel="stylesheet" href="{{ asset('Koleksi.css')}}"/>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="{{ asset('navbar.css')}}" rel="stylesheet">
</head>

<body>
    <header>
        <img src="{{asset('logouai.png')}}" alt="logouai" class="logo-uai" >
        <nav class = "menu-toggle-1">
            <ul>
                <li>
                    <a href="">
                        {{auth()->user()->username}}
                        <i class="fa-solid fa-caret-down" style="color: rgba(0,0,0, .70);"></i>
                    </a>
                    <ul class ="isi-user">
                        <li>
                            <a href="{{route('profil')}}">
                                <i class="fa-solid fa-user" style="color: rgba(0,0,0, .70);"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/cart')}}">
                                <i class="fa-solid fa-cart-shopping" style="color: rgba(0,0,0, .70);"></i>
                                Keranjang
                            </a>
                        </li>
                        <li>
                            <a href="{{route('invoice')}}">
                                <i class="fa-solid fa-file-invoice" style="color: rgba(0,0,0, .70);"></i>
                                list Pinjaman
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('/home')}}">Beranda</a></li>
                <li><a href="{{url('/koleksis')}}">Koleksi</a></li>
            </ul>
        </nav>
    </header>
</body>
    <nav>
        <div class ="navlink">
            <div class ="backbutton">
                <i class="fa-solid fa-arrow-left" style="color: #545454;"></i>
            </div>
            <ul class="isinavlink">
                <li><a href ="{{url('/home')}}">Beranda</a></li>
                <li>/</li>
                <li><a href ="{{url('/koleksis')}}">Koleksi</li></a></li>
                <li>/</li>
                <li>Judul</li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="section1">

            <img class="buku" src="data:image/png;base64,{{ chunk_split(base64_encode($koleksi->cover_koleksi)) }}" alt= 'Filsafat' width=273.66px height=417px/>
        </div>
        <div class="section2">
            <div class ="description">
                <h1 class ="Judul">{{$koleksi->judul_koleksi}}</h1>
                <hr class="garis">
            </div>
            <ul class ="Biodatabuku">
                <li>{{$koleksi->penulis}}</li>
                <li>Status: {{$koleksi->status_koleksi}}</li>
                <li>Eksemplar: {{$koleksi->jumlah_eksemplar}}</li>
            </ul>
            <h2 class ="Deskripsi">Deskripsi</h2>
            <p class ="Deskripsi_txt">
                {{$koleksi->deskripsi_koleksi}}
            </p>
          <div class="tombol-koleksi">
                <a href="{{ url('/cart/tambah/'.$koleksi->id) }}" class="tambah-chart">
                    <i class="fa-solid fa-cart-plus" style="color: #ffffff;"></i>
                    <span class="k-1">Keranjang</span>
                </a>
            
            </div>
        </div>
    </section>
</body>
</html>
