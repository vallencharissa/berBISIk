<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoAja.png') }}">
    <title>Login</title>
</head>
<body>

    <div class="case">

        <div class="kiri">

                <div class="text">
                    <h1>Masuk</h1>
                    <br>
                </div>

                <form method="POST" action="">
                    @csrf
                    <input type="email" name="email" class="text-box" placeholder="Email Anda" required/>
                    <br>
                    <input type="password" name="password" class="text-box2" placeholder="Kata Sandi" required/>
                    <br>
                    <button type="submit">Masuk</button>
                </form>

                @if(Session::has('status'))
                <div class="alert" role="alert">
                    {{Session::get('message')}}
                </div>
                @endif

                <div class="text">
                    <br>
                    <p>Tidak punya akun? <a href="/register" >Buat Akun</a></p>
                </div>

                
        </div>
    

        <div class="kanan">
            <img src="{{ asset('assets/logo.png') }}">
            <p>#BerbahasaIsyaratIndonesiaAsik</p>
        </div>



    </div>

</body>
</html>