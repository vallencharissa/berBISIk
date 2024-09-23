<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BerBISIk | @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- buat icon tapi blmbisaaaa --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoOnly.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header start -->
    <header>
        <nav class="navbar">
            
            <div class="logo">
                <a href="/" class="nav-link"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
            </div>

            <ul class="nav-menu">

                <li class="nav-item">
                    <a href="/" class="nav-link">Beranda</a>
                </li>

                <li class="nav-item">
                    <a href="/kamus" class="nav-link">Kamus</a>
                </li>

                <li class="nav-item">
                    <a href="/acara" class="nav-link">Acara</a>
                </li>

                <li class="nav-item">
                    <a href="/tentangKami" class="nav-link">Tentang Kami</a>
                </li>

                <li class="nav-item">
                    <a href="/profil" class="nav-link">Profil</a>
                </li>
                
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            </ul>
<!-- 
            <ul>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            </ul> -->

            <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
            </div>
        </nav>
    </header>
    <!-- header end -->

    <main>
        @yield('content')
    </main>

    <!-- footer start  -->
    <footer>
        <div class="text">
            <h1>#BerbahasaIsyaratIndonesiaAsik</h1>
            <p>
                Kami berupaya memberikan aksesibilitas dan inklusi dalam mempelajari bahasa isyarat melalui 
                platform pembelajaran yang mudah diakses dan berorientasi pasa pengguna dengan inovasi dan 
                pengetahuan mendalam tentang bahasa insyarat
            </p>
        </div>

        <hr>

        <div class="contact">
            <pre>+62 89732706488  |  berbisik@gmail.com</pre>
        </div>

        <div class="social">
            <a href=""><img src="{{ asset('assets/instagram.png') }}" alt="logo insta"></a>
            <a href=""><img src="{{ asset('assets/twit.png') }}" alt="logo twitter"></a>
            <a href=""><img src="{{ asset('assets/fb.png') }}" alt="logo facebook"></a>
        </div>

        <div class="copyRight">
            <img src="{{ asset('assets/cr.png') }}" alt="credit"><p>2024 Ber<span>BISI</span>k</p>
        </div>
    </footer> 
    <!-- footer end  -->
</body>
<script>
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))
    </script>
</html>