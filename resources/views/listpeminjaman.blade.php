<!DOCTYPE html>
<head>
    <title>List Peminajaman</title>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="{{asset('listpeminjaman.css')}}" rel="stylesheet">
</head>

<body>
    <!--Nav Bar-->
    <header>
        <img src="{{asset('logouai.png')}}" alt="logouai" class="logo-uai" >
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
        <section>LIST PEMINJAMAN</section>
        <ul>
            <li><a href = "{{route('profil')}}"><i class="fa-solid fa-user" style="color: #ffffff;"></i>Profil</a></li>
            <li><a href = "{{url('/cart')}}"><i class="fa-sharp fa-solid fa-basket-shopping" style="color: #ffffff;"></i>Keranjang</a></li>
            <li><a href = "{{route('invoice')}}"><i class="fa-solid fa-list" style="color: #ffffff;"></i>List Peminjaman</a></li>
            <li><a href = "{{url('logout')}}"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>Sign Out</a></li>

        </ul>


    </div>
    <!--Side Bar-->

    <!--Isi list peminjaman-->

    <div class="container">
        <div class ="tempat">
            <h2>LIST PEMINJAMAN</h2>
        </div>
        <div class="kotak-card">

        @foreach ( $peminjaman as $p )
            <div class="card-1">
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($p->cover_koleksi)) }}">
                <div class="isian">
                    <h3> {{ $p->judul_koleksi }} </h3> <br>
                    <h4>Tanggal Peminjaman : {{ $p->tanggal_peminjaman }}</h4>
                    <h4>Tanggal Pengembalian : {{ $p->tanggal_pengembalian }}</h4>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <!--Isi list peminjaman-->


</body>
</html>
