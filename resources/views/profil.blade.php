<!DOCTYPE html>
<html lang="Indonesia">
<head>
    <title>Profil</title>
    <link href="https://www.fontshare.com/fonts/satoshi">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel ="stylesheet">
    <link href="profil.css" rel="stylesheet">
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

    <!--Isi Profil-->

    <div class="container">
        <div class ="tempat">
            <h2>PROFILE :</h2>
        </div>
        <div class="bagian-a">
            <img src="gambar_profile-removebg-preview.png">
            <div class="status-profil">
                <h4>Nama : {{$user->username}} </h4>
                <h5> Mahasiswa</h5>
            </div>
        </div>
        <div class="kotak-card">
            <div class="card-1">
                <div class="bag-atas">
                    {{-- <div class="email">
                        <h6>Email : </h6>
                        <input>
                    </div> --}}
                    <div class="no-telp">
                        <h6>Nomor Telepon : {{$user->no_telp}} </h6>
                    </div>
                </div>
                <div class="bag-bawah">
                    <div class="alamat">
                        <h6>Alamat : {{$user->alamat}} </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
