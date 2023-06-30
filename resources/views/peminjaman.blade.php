<!DOCTYPE html>
<html lang="Indonesia">
<head>
    <title>Booking</title>
    <title>Beranda</title>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="Booking.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
</head>
<body>
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
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li><a href="{{url('/koleksis')}}">Koleksi</a></li>
            </ul>
        </nav>
    </header>

    <nav>
        <div class ="navlink">
            <div class ="backbutton">
                <i class='bx bx-arrow-back'></i>
                <box-icon name='arrow-back'></box-icon>
            </div>
            <ul class="isinavlink">
                <li><a href ="{{url('/cart')}}">Cart</a></li>
                <li>/</li>
                <li>Booking</li>
            </ul>
        </div>
    </nav>

    <section>

        <div class="booking">
            <ul class ="isi-booking">

                {{-- start awal --}}
                <li class ="items">
                    <form method="POST" action="{{ route('checkout.process') }}">
                    @csrf
                    <h1 class = "judul1">Items :</h1>
                    @foreach ($cart as $ct => $var)
                    <div class ="items-1">
                        <div class ="gambar-item-1">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($var["cover_koleksi"])) }}" alt="gambar item 1">
                        </div>
                        <div class="isi-item-1">
                            <h1 class ="judul-item-1"> {{$var["judul_koleksi"]}} </h1>
                            <p class ="author-item-1">Penulis: {{$var["penulis"]}} </p>
                        </div>
                    </div>
                    @endforeach
                </li>


                {{--  akhir start awal --}}

                {{-- start akhir 2 --}}
                <li class ="ringkasan-booking">
                    <div class = "judul-booking-1">
                        <h1 class ="BOOKING"> BOOKING</h1>
                    </div>
                    <p class ="total">Total : {{count($cart)}}</p>
                    <div class ="waktu-peminjaman">
                        <p class ="tanggal-p">Tanggal Peminjaman :</p>
                        <input type="date" class ="tanggal-pinjam" id="tanggal_peminjaman" name="tanggal_peminjaman" required>
                    </div>

                    <div class="tombol">
                        <button class="booking-now">
                            <p>Booking Now</p>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>
