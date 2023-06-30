<!DOCTYPE html>
<html>
    <head>
        <title>Berhasil</title>
        <link rel="stylesheet" href="{{ asset('Berhasil.css') }} ">
        <body>
            <div class="container">
                <div class="popup" id="popup">
                    <img src=" {{ asset('berhasil.png') }} ">
                    <h2> BERHASIL !!!!</h2>
                    <p> Peminjaman Anda Telah Berhasil</p>
                    <button type="button"><a href=" {{ route('invoice') }} ">Lihat Invoice</button>
                </div>

            </div>
        </body>
    </head>
</html>
