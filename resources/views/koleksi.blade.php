@extends('layout')

@section('container')


{{-- @foreach ($jeniskoleksis as $jeniskoleksi) --}}


<link rel="stylesheet" href="{{ asset('jeniskoleksi.css') }}"/>
<title>Koleksi</title>
<body>

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
             <div class="searchsec">
            <center>
                <form action="{{ route('search') }}" class  ="searchbar">
                    <input type="text" placeholder="Type your search here..." name="search">
                    <button type="submit"><i class='bx bx-search-alt' width="100px"></i></button>
                </form>
            </center>
        </div>

        </div>
    </nav>

    <section>
        <div class="Jenis-k">
            <h1 class="judul-k">
                Jenis Koleksi
            </h1>
        @foreach ($jeniskoleksi as $jk )
            <ul>
                <li class ="Buku"> {{$jk->nama_jk}} </li>
            </ul>
        @endforeach
        </div>



        <div class =slider>

            <div class="sect-b-1">
                @foreach ($koleksis as $koleksi)
                <div class="item-1">

                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($koleksi->cover_koleksi)) }}" class="isigambar-1">
                    <div class = "isiitem-1">
                    <h3 class="judul-b-1"><a> {{$koleksi->judul_koleksi}} </a></h3>
                    <hr>
                    <ul>
                        {{-- <li class="jeniskoleksi-1">Koleksi: {{$koleksi->nama_jk}}</li> --}}
                        <li class="statuskoleksi-1">Status: {{$koleksi->status_koleksi}}</li>
                        <li class="selengkapnya-1"><a href="{{route('detail-koleksi.show', $koleksi->id)}}">Selengkapnya...</a></li>
                    </ul>
                    </div>
                </div>
            @endforeach
            </div>

        </div>

    </section>
</body>
</html>
{{-- @endforeach --}}

@endsection
