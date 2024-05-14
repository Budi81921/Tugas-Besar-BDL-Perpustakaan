<!DOCTYPE html>
<head>

    <link rel="stylesheet" href = "Login.css">
<body>
    <div class="tampilan-l">
        <title>Login</title>
    </div>
    <div class="container">
        <div class="login">
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form  method="POST" action="{{route('login')}}">

                @csrf
                <h1>Login</h1>
                <div>
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" value="" required autofocus>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            {{-- <form action=""> --}}

                {{-- <p class="periksa" id="popup">Periksa Kembali Password Anda</p> --}}
                <button onclick="openPopup()">Continue</button>
                {{-- <p> --}}
                    <a href="/admin">admin</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="cover-login.jpg" alt="">
        </div>
    </div>
<script>
    let popup = document.getElementById("popup");

    function openPopup(){
    popup.classList.add("open-popup");
    }

</script>
</body>
</head>


