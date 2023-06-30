<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="home.css" rel ='stylesheet'>
    <script src="home.js" defer></script>
    <link href="navbar.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
                            <a href="{{url('/list-peminjaman')}}">
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
    <section>
        <div class="page1">

                <div class="isipage1">
                    @guest
                    <h1>Welcome</h1>
                    <h2>To Perpustakaan UAI</h2>
                    <button class="login">
                        <p><a href="/login">Log in</a></p>
                    </button>
                    @endguest

                    @auth
                    <h1>Welcome</h1>
                    <h2> {{auth()->user()->username}} </h2>
                    <button class="login">
                        <p><a href="/logout">Log out</a></p>
                    </button>
                    @endauth
                    {{-- <h1>Welcome</h1>
                    <h2>{{ auth()->user()->username }} </h2> --}}


                </div>

        </div>

        <div class="page2">
            <div class="Judulpage2">
                <h3>Our Collection</h3>
            </div>
            <div class="garis">
                <hr>
            </div>
        </div>

        <div class ="page3">
            <div class="covercarousel">
                <i id="left" class="fa-solid fa-angle-left fa-xl" style="color: #555555;"></i>
                <ul class ="carousel">
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                    <li class ='card'>
                        <div class="gambar1c">
                            <img src="download.png.jfif.jpg" alt="img1" draggable="false">
                        </div>
                        <h2>Order of The Phoenix</h2>
                        <span>By : Andrew</span>
                    </li>
                </ul>
                <i id="right" class="fa-solid fa-angle-right fa-xl" style="color: #555555;"></i>
            </div>
        </div>

        <div class ="page4">
            <div class="judulguide">
                <h1>Guide</h1>
                <h2>Helpful guide to Using the Perpustakaan UAI</h2>
            </div>
            <ul class = "sectguide">
                <li class = "card1">
                    <div class ="backgroundata">
                        <div class="iconhelp">
                            <i class="fa-solid fa-question fa-lg" style="color: #6e6e6e;"></i>
                        </div>
                        <h1>Cara Memilih Buku</h1>
                    </div>
                    <div class ="isi">
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam</p>
                    </div>
                </li>
                <li class = "card1">
                    <div class ="backgroundata">
                        <div class="iconhelp">
                            <i class="fa-solid fa-question fa-lg" style="color: #6e6e6e;"></i>
                        </div>
                        <h1>Cara Memilih Buku</h1>
                    </div>
                    <div class ="isi">
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam</p>
                    </div>
                </li>
                <li class = "card1">
                    <div class ="backgroundata">
                        <div class="iconhelp">
                            <i class="fa-solid fa-question fa-lg" style="color: #6e6e6e;"></i>
                        </div>
                        <h1>Cara Memilih Buku</h1>
                    </div>
                    <div class ="isi">
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam</p>
                    </div>
                </li>
                <li class = "card1">
                    <div class ="backgroundata">
                        <div class="iconhelp">
                            <i class="fa-solid fa-question fa-lg" style="color: #6e6e6e;"></i>
                        </div>
                        <h1>Cara Memilih Buku</h1>
                    </div>
                    <div class ="isi">
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam</p>
                    </div>
                </li>
            </ul>

        </div>

    </section>
</body>

</html>
