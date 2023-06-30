<!DOCTYPE html>
<html lang="Indonesia">
<head>
    <title>Navbar</title>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="{{asset('navbar.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('jeniskoleksi.css') }}"/>
    <title>Koleksi</title>
</head>


<body>
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
                            <a href="#">
                                <i class="fa-solid fa-user" style="color: rgba(0,0,0, .70);"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-cart-shopping" style="color: rgba(0,0,0, .70);"></i>
                                Keranjang
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
    <div class ="navlink">
        <div class ="backbutton">
            <i class="fa-solid fa-arrow-left" style="color: #545454;"></i>
        </div>
        <ul class="isinavlink">
            <li><a href ="{{url('/')}}">Beranda</a></li>
            <li>/</li>
            <li><a href ="{{url('/koleksis')}}">Koleksi</li></a></li>
            <li>/</li>
            <li>Judul</li>
        </ul>
        <div class="searchsec">
            <center>
                <form action="" class  ="searchbar">
                    <input type="{{ route('search') }}" placeholder="Type your search here..." name="search">
                    <button type="submit"><i class='bx bx-search-alt' width="100px"></i></button>
                </form>
            </center>
        </div>

    </div>




    <section>
        <div class="Jenis-k">
            <h1 class="judul-k">
                Jenis Koleksi
            </h1>
            <ul>
                <li class ="Buku">Buku</li>
                <li class ="Karya-ilmiah">Karya ilmiah</li>
                <li class ="Koran">Koran</li>
                <li class ="Koran">Majalah</li>
                <li class ="Skripsi">Skripsi</li>
            </ul>
        </div>

        <div class =slider>

            <div class="sect-b-1">
                @foreach ($results as $result)
                <div class="item-1">

                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($result->cover_koleksi)) }}" class="isigambar-1">
                    <div class = "isiitem-1">
                    <h3 class="judul-b-1"><a> {{$result->judul_koleksi}} </a></h3>
                    <hr>
                    <ul>
                        <li class="jeniskoleksi-1">Koleksi: {{$result->nama_jk}}</li>
                        <li class="statuskoleksi-1">Status: {{$result->status_koleksi}}</li>
                        <li class="selengkapnya-1"><a href="{{route('detail-koleksi.show', $result->id)}}">Selengkapnya...</a></li>

                    </ul>

                    </div>

                </div>
            @endforeach
            </div>

        </div>

    </section>
</body>
</html>

