<!DOCTYPE html>
    <html lang="Indonesia">
    <head>
        <title>Keranjang</title>
        <link href="https://www.fontshare.com/fonts/satoshi">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
        <link href="{{asset('cart.css')}}" rel="stylesheet">
    </head>

    <body>
        <!--Nav Bar-->
        <header>
            <img src="{{asset('logouai.png')}}" alt="logouai" class="logo-uai">
            <nav class = "menu-toggle-1">
                <ul>
                    <li>
                        <a href="#">
                            {{auth()->user()->username}}
                            <i class="fa-solid fa-caret-down" style="color: rgba(0,0,0, .70);"></i>
                        </a>
                        <ul class ="isi-user">
                            <li>
                                <a href="{{url('profil')}}">
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
                                <a href="{{url('invoice')}}">
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
                <li><a href = "{{url('/profile')}}"><i class="fa-solid fa-user" style="color: #ffffff;"></i>Profil</a></li>
                <li><a href = "{{url('/cart')}}"><i class="fa-sharp fa-solid fa-basket-shopping" style="color: #ffffff;"></i>Keranjang</a></li>
                <li><a href = "{{url('invoice')}}"><i class="fa-solid fa-list" style="color: #ffffff;"></i>List Peminjaman</a></li>
                <li><a href = "{{url('logout')}}"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Sign Out</a></li>

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
                <h1>Peminjaman Maksimal 3!</h1>
            </div>
        </div>
    </body>

