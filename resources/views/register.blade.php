<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoAja.png') }}">
    <title>Register</title>
</head>
<body>

    <div class="case">

        <div class="kanan">
            <img src="{{ asset('assets/logo.png') }}">
            <p>#BerbahasaIsyaratIndonesiaAsik</p>
        </div>

        <div class="kiri">

                <div class="text">
                    <h1>Buat Akun</h1>
                    <br>
                </div>

                <form method="POST" action="register">
                    @csrf
                    <input value="{{ old('email') }}" name="email" type="email" class="text-box" placeholder="Email Anda" />
                
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <span>{{ $errors->first('email') }}</span>
                            </ul>
                        </div>
                    @endif
                    <br>
                    <input type="password" name="password" id="password" class="text-box2" placeholder="Kata Sandi" />
                    <br>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="text-box2" placeholder="Ulangi Kata Sandi" />
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <span>{{ $errors->first('password') }}</span>
                            </ul>
                        </div>
                    @endif
                    <br>
                    <button type="submit">Buat Akun</button>
                </form>

                @if(Session::has('status'))
                <div class="alert" role="alert">
                    {{Session::get('message')}}
                </div>
                @endif

                <div class="text">
                    <br>
                    <p>Sudah punya akun <a href="/login" >Masuk</a></p>
                </div>
        </div>
    </div>

</body>
</html>