@if (empty($cart) || count($cart)==0)

    <!DOCTYPE html>
    <html lang="Indonesia">
    <head>
        <title>Keranjang</title>
        <link href="https://www.fontshare.com/fonts/satoshi">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
        <link href="cart.css" rel="stylesheet">
    </head>

    <body>
        <!--Nav Bar-->
        <header>
            <img src="logouai.png" alt="logouai" class="logo-uai" >
            <nav class = "menu-toggle-1">
                <ul>
                    <li>
                        <a href="#">
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
        <!--Batas Nav Bar-->

        <!--Side Bar-->
        <div class="sidebar">
            <section>PROFIL</section>
            <ul>
                <li><a href = "{{route('profil')}}"><i class="fa-solid fa-user" style="color: #ffffff;"></i>Profil</a></li>
                <li><a href = "{{url('/cart')}}"><i class="fa-sharp fa-solid fa-basket-shopping" style="color: #ffffff;"></i>Keranjang</a></li>
                <li><a href = "{{route('invoice')}}"><i class="fa-solid fa-list" style="color: #ffffff;"></i>List Peminjaman</a></li>
                <li><a href = "{{route('logout')}}"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Sign Out</a></li>

            </ul>

        </div>
        <!--Side Bar-->

        <!--Isi Keranjang-->
        <div class="container">
            <div class ="tempat">
                <h2>KERANJANG</h2>
                <button class="tombol-c">
                    <i class="fa-sharp fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                    <a href="{{ url('checkout') }}">Check Out</a>
                </button>
            </div>
                <h1>Keranjang anda Kosong!</h1>
            </div>
        </div>
    </body>

@else

    <!DOCTYPE html>
    <html lang="Indonesia">
    <head>
        <title>Keranjang</title>
        <link href="https://www.fontshare.com/fonts/satoshi">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
        <link href="cart.css" rel="stylesheet">
    </head>

    <body>
        <!--Nav Bar-->
        <header>
            <img src="logouai.png" alt="logouai" class="logo-uai" >
            <nav class = "menu-toggle-1">
                <ul>
                    <li>
                        <a href="#">
                            User
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
        <!--Batas Nav Bar-->

        <!--Side Bar-->
        <div class="sidebar">
            <section>KERANJANG</section>
            <ul>
                <li><a href = "{{route('profil')}}"><i class="fa-solid fa-user" style="color: #ffffff;"></i>Profil</a></li>
                <li><a href = "{{url('/cart')}}"><i class="fa-sharp fa-solid fa-basket-shopping" style="color: #ffffff;"></i>Keranjang</a></li>
                <li><a href = "{{route('invoice')}}"><i class="fa-solid fa-list" style="color: #ffffff;"></i>List Peminjaman</a></li>
                <li><a href = "{{route('logout')}}"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Sign Out</a></li>

            </ul>

        </div>
        <!--Side Bar-->

        <!--Isi Keranjang-->
        <div class="container">
            <div class ="tempat">
                <h2>KERANJANG</h2>
                <button class="tombol-c">
                    <i class="fa-sharp fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                    <a href="{{ url('checkout') }}">Check Out</a>
                </button>
            </div>
            <div class="kotak-card">
                @foreach ($cart as $ct => $var)
                <div class="card-1">
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($var["cover_koleksi"])) }}">
                    <h3>{{$var["judul_koleksi"]}}</h3>
                    <button class="tombol-r">
                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                        <a href="{{url('/cart/hapus/'.$ct)}}"> Remove </a>
                    </button>
                </div>
            @endforeach
            </div>
        </div>
    </body>




@endif

{{-- @if (empty($cart) || count($cart)==0)
    Keranjang kosong
    <a href="{{url('koleksi')}}">Kembali ke koleksi</a>
@else
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://www.fontshare.com/fonts/satoshi">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
        <link rel="stylesheet" href="cart.css">
        <link rel="stylesheet" href="jeniskoleksi.css') }}"/>
        <title>Keranjang</title>
    </head>
        <body>
            <div class ="backbutton">
                <i class="fa-solid fa-arrow-left" style="color: #545454;"></i>
            </div>
            <ul class="isinavlink">
                <li><a href ="{{url('/')}}">Beranda</a></li>
                <li>/</li>
                <li><a href ="{{url('/koleksi')}}">Koleksi</li></a></li>
                <li>/</li>
                <li>Judul</li>
            </ul>

            <h1>Keranjang</h1>
            <div class="container">

                <div class="list">
                @foreach ($cart as $ct => $var)
                    <div class = "card-1">
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($var["cover_koleksi"])) }}">
                        <h2>{{$var["judul_koleksi"]}}</h2>
                        <h2>{{$var["penulis"]}}</h2>
                        <div class="tombol">
                            <button class="tombol-r">
                                <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                <a href="{{url('/cart/hapus/'.$ct)}}"> Remove </a>
                            </button>
                        </div>
                    </div>
                @endforeach
                </div>

                <div class="tombol">
                    <button class="tombol-c">
                        <i class="fa-sharp fa-solid fa-circle-check" style="color: #ffffff;"></i>
                        <a href="{{ url('checkout') }}">Check Out</a>
                    </button>
                </div>

            </div>
    </body>
    </html>
{{-- @endsection --}}
{{-- @endif --}}
