<!DOCTYPE html>
<head>
    <title>Data Peminjaman</title>
    <link href="" rel="stylesheet" type="text/css">
</head>
<body>

    <h1>Laporan Data Peminjaman</h1>
    <div class="tabel">
    <table>
        <!-- Kolom -->
        <thead>
            <tr>
                <th>Id Peminjaman</th>
                <th>Nama Peminajam</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($listpeminjaman as $list)
            <tr>
                <td> {{$list->id_peminjaman}} </td>
                <td> {{$list->username}} </td>
                <td> {{$list->judul_koleksi}} </td>
                <td> {{$list->tanggal_peminjaman}} </td>
                <td>{{$list->tanggal_pengembalian}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

</body>
