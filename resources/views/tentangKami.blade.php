
@extends('layout/layout')

@section('title', 'Tentang Kami')

<link rel="stylesheet" href="{{ asset('css/tentangKami.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
@section('content')
{{-- insert code here --}}

<div>
    <div class="header-container">
        <div class="header-bg">
            <img class="bg" src="{{ asset('assets/tentangKami/backgroundLeft.png') }}" alt="">
            <img class="bg-tab" src="{{ asset('assets/tentangKami/backgroundRight.png') }}" alt="">
        </div>
        
        <div class="header">
            <div class="title">
                <img src="{{ asset('assets/logoOnly.png') }}" alt="photo logo">
                <h1 >Ber<span>BISI</span>k</h1>
            </div>
            
            <p>#BerbahasaIsyaratIndonesiaAsik</p>
        </div>
        <img class="bg" src="{{ asset('assets/tentangKami/backgroundRight.png') }}" alt="">
    </div>
   

    <section class="cerita-section">
        <div class="cerita">

            {{-- <div class="judul"> --}}
                <h2>CERITA BER<span>BISI</span>K</h2>
            {{-- </div> --}}
            
            <div class="content">
                
                <img id="circle-left" src="{{ asset('assets/tentangKami/circleLeft.png') }}" alt="">
                <div class="para">
                    <p>Kami adalah tim yang ber<span>komitmen</span> untuk menyediakan <span>aksesibilitas</span> dan <span>inklusi</span> dalam mempelajari bahasa isyarat. Kami percaya setiap individu berhak berkomunikasi secara <span>bebas</span> dan <span>mandiri.</span> Dengan pengalaman dalam pendidikan dan teknologi, kami menciptakan platform pembelajaran bahasa isyarat yang <span class="gradient-text">mudah diakses, inovatif, dan efektif.</span></p>
                </div>
                <img id="circle-right" src="{{ asset('assets/tentangKami/circleRight.png') }}" alt="">
            </div>
            
        </div>
    </section>
    

    <section class="visi-section">
        <div class="visi">

            <div class="paragrap">
    
                <p>Menciptakan dunia di mana bahasa isyarat diakui, dihargai, dan diintegrasikan dalam masyarakat. Kami percaya bahwa pembelajaran bahasa isyarat adalah hak semua individu. Dengan memperluas pemahaman dan penggunaan bahasa isyarat, kami berharap membangun jembatan komunikasi antara komunitas tunarungu dan pendengar, serta meningkatkan inklusi sosial dan kesetaraan peluang.</p>
            </div>
    
            <div class="visiKami">
                <span>VISI KAMI</span>
            </div>
        </div>
    
    

    
        <div class="misi">

            <div class="misiKami">
                <span>MISI KAMI</span>
            </div>
    
            <div class="paragrapMisi">
    
                <p>Menyediakan platform pembelajaran inovatif dan terjangkau untuk memudahkan semua individu mempelajari dan menguasai bahasa isyarat. Kami berkomitmen menyediakan konten berkualitas tinggi, interaktif, dan mudah dipahami, serta memfasilitasi pertukaran pengetahuan antar pengguna.</p>
            </div>
        </div>
    </section>
   

<section>
    <div class="case">

        <div class="timKami">
            <div class="juduls">
                <h1>TIM KAMI</h1>
            </div>

            <div class="bulet">
            </div>
        </div>
    </div>

    <div class="member-container">
        <div class="member">
            <div class="img1">
                <div class="bulet-img1"></div>
                <div class="kotak-img1"></div>
                <img src="{{ asset('assets/el.png') }}" alt="">
            </div>
            <div class="nama">
                <h2>DIREKTUR UTAMA</h1>
                <P>Anastashia Ellena Widjaja</P>
            </div>
    </div>

    <div class="member">
            <div class="img2">
                <div class="kotak-img2"></div>
                <img src="{{ asset('assets/jeje.png') }}" alt="">
            </div>
            <div class="nama">
                <h2>KEPALA KURIKULUM</h1>
                <P>Jesselyn Widjaja</P>
            </div>
    </div>
    
    <div class="member">
            <div class="img3">
                <div class="bulet-img3"></div>
                <div class="kotak-img3"></div>
                <img src="{{ asset('assets/jessy.png') }}" alt="">
            </div>
            <div class="nama">
                <h2>KEPALA PEMASARAN</h1>
                <P>Jessy Clarissa Wijaya</P>
            </div>
    </div>
    <div class="second-row">
        <div class="member">
            <div class="img4">
                <div class="bulet-img4"></div>
                <div class="kotak-img4"></div>
                <img src="{{ asset('assets/ly.png') }}" alt="">
            </div>
            <div class="nama">
                <h2>PENGEMBANG WEB</h1>
                <P>Lysandra Velyca</P>
            </div>
        </div>

        <div class="member">
            <div class="img5">
                <div class="bulet-img5"></div>
                <div class="kotak-img5"></div>
                <img src="{{ asset('assets/val.png') }}" alt="">
            </div>
            <div class="nama">
                <h2>PERANCANG GRAFIS</h1>
                <p>Vallen Charissa Gunawan</p>
            </div>
        </div>
    </div>
    
    </div>
    <div class="advertisement-container">
        <div class="advertisement-box">
            <img src="assets/tentangKami/peserta.png">
            <h2>378</h2>
            <p>Peserta Program Kami</p>
        </div>

        <div class="advertisement-box">
            <img src="assets/tentangKami/provinsi.png">
            <h2>25</h2>
            <p>Provinsi di Indonesia</p>
        </div>
        <div class="advertisement-box">
            <img src="assets/tentangKami/paket.png">
            <h2>32</h2>
            <p>Paket Belajar</p>
        </div>
    </div>  
</section>
        
        
        <section class="bisikan-mereka-section">
            <div class="bisik">
                <div class="bisi">
    
                    <h2><span>BISI</span>KAN MEREKA </h2>
    
                    <div class="comment-container">
                        <div class="comment-box">
                            <div class="comment">
                                <img class="profile-picture" src="{{ asset('assets/tentangKami/jeno.png') }}" alt="">
                                <div class="content">
                                    <div class="name-rating">
                                        <div class="name-desc">
                                            <h3>JENO</h3>
                                            <p>Mahasiswa</p>
                                        </div>
                                        <img src="{{ asset('assets/tentangKami/rating.png') }}" alt="">
                                    </div>
                                    <p>Saya sering lihat penerjemah bahasa isyarat di TV
                                        dan saya tertarik untuk belajar tapi sulit untuk dipahami sendiri.
                                        Setelah mengikuti pembelajaran di berBISIk, materi terasa lebih
                                        mudah karena dibimbing sampai bisa. Pengajarnya juga
                                        memastikan sampai saya paham.</p>
                                </div>
                            </div>
                            <img class="triangle" src="{{ asset('assets/tentangKami/triangle.png') }}" alt="">
                        </div>
                        
                        <div class="comment-box">
                            <div class="comment">
                                <img class="profile-picture" src="{{ asset('assets/tentangKami/melisa.png') }}" alt="">
                                <div class="content">
                                    <div class="name-rating">
                                        <div class="name-desc">
                                            <h3>MELISA</h3>
                                            <p>Pelajar</p>
                                        </div>
                                        <img src="{{ asset('assets/tentangKami/rating.png') }}" alt="">
                                    </div>
                                    <p>Sebagai seseorang yang baru memulai belajar bahasa isyarat, saya sangat terkesan dengan pengalaman menggunakan website pembelajaran ini. Materi yang disajikan sangat mudah dipahami dan interaktif. Saya merasa semakin percaya diri dalam berkomunikasi dengan penyandang tunarungu.</p>
                                </div>
                            </div>
                            <img class="triangle" src="{{ asset('assets/tentangKami/triangleLeft.png') }}" alt="">
                        </div>
    
                        <div class="comment-box">
                            <div class="comment">
                                <img class="profile-picture" src="{{ asset('assets/tentangKami/namju.png') }}" alt="">
                                <div class="content">
                                    <div class="name-rating">
                                        <div class="name-desc">
                                            <h3>NAMJU</h3>
                                            <p>Pekerja</p>
                                        </div>
                                        <img src="{{ asset('assets/tentangKami/rating.png') }}" alt="">
                                    </div>
                                    <p>Saya sangat senang dengan website pembelajaran bahasa isyarat ini! Materinya mudah dipahami dan membantu saya belajar dengan cepat. Terima kasih!</p>
                                </div>
                            </div>
                            <img class="triangle" src="{{ asset('assets/tentangKami/triangle.png') }}" alt="">
                        </div>
    
                        <div class="comment-box">
                            <div class="comment">
                                <img class="profile-picture" src="{{ asset('assets/tentangKami/rachel.png') }}" alt="">
                                <div class="content">
                                    <div class="name-rating">
                                        <div class="name-desc">
                                            <h3>RACHEL</h3>
                                            <p>Ibu Rumah Tangga</p>
                                        </div>
                                        <img src="{{ asset('assets/tentangKami/rating.png') }}" alt="">
                                    </div>
                                    <p>Selain mendapatkan materi, saya juga mendapat kesempatan untuk mengikuti kegiatan volunteer melalui platform ini. Pengalaman ini sangat berharga bagi saya karena saya bisa langsung mengaplikasikan apa yang telah dipelajari dalam situasi nyata. </p>
                                </div>
                            </div>
                            <img class="triangle" src="{{ asset('assets/tentangKami/triangleLeft.png') }}" alt="">
                        </div>
    
                    </div>
    
                        
                </div>
            </div>
        </section>
        

        <div class="faq">

        <h2>PALING SERING DITANYAKAN</h2>

        <div class="a">
            <div class="question">
                <h4>Apa itu berBISIk?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>BerBISIk adalah platform yang menjadi wadah pembelajaran bahasa isyarat bagi 
                    semua orang. Selain menyediakan kamus gerakan BISINDO, berBISIk juga menyediakan kegiatan pembelajaran lain seperti 
                    seminar dan kegiatan relawan.</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apa itu bahasa isyarat?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Bahasa isyarat adalah bentuk komunikasi non-verbal menggunakan gerakan tangan, 
                    posisi tubuh, dan ekspresi wajah untuk menyampaikan makna, digunakan oleh orang 
                    dengan gangguan pendengaran atau dalam situasi di mana komunikasi verbal tidak mungkin
                    atau tidak nyaman.</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apakah saya perlu memiliki pengalaman sebelumnya dalam bahasa isyarat untuk menggunakan platform ini?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Tidak, Anda tidak perlu memiliki pengalaman sebelumnya dalam bahasa isyarat untuk menggunakan 
                    platform ini. Platform ini dirancang untuk semua orang, termasuk pemula dalam bahasa isyarat.
                     Ada berbagai sumber daya dan materi pembelajaran yang tersedia di platform ini untuk membantu 
                     Anda belajar dan mengembangkan kemampuan bahasa isyarat Anda dari awal. </p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Bagaimana saya bisa berpartisipasi dalam kegiatan volunteer atau kontribusi konten untuk platform ini?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Anda dapat memilih acara relawan yang tersedia pada bagian "Acara Relawan." Kemudian, Anda dapat klik pada kartu tersebut dan muncul detail acara relawan yang Anda pilih. Di sana Anda perlu menekan tombol "Daftar Sekarang." Untuk melihat apakah Anda berhasil mendaftar, daftar Acara Relawan yang Anda pilih dapat terlihat pada profil Anda.</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apakah saya bisa memperoleh sertifikat setelah menyelesaikan kursus atau modul tertentu?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Ya, biasanya platform pembelajaran online menawarkan sertifikat kepada peserta yang berhasil 
                    menyelesaikan kursus atau modul tertentu. Anda dapat memperoleh sertifikat sebagai bukti 
                    bahwa Anda telah menyelesaikan pelatihan atau pembelajaran dalam bidang tertentu, termasuk
                    bahasa isyarat.</p>
            </div>
        </div>

        <div class="a">
            <div class="question">
                <h4>Apakah saya bisa menggunakan platform ini secara gratis?</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer">
                <p>Ya, Anda dapat menggunakan platform ini secara gratis tanpa biaya langganan atau pembayaran.
                    Platform ini dirancang untuk memberikan akses mudah dan bebas untuk semua pengguna yang ingin 
                    belajar atau berpartisipasi dalam komunitas bahasa isyarat. Namun, beberapa fitur mungkin 
                    memiliki versi premium atau opsi berlangganan tambahan yang dapat Anda pilih untuk mendapatkan 
                    akses lebih lanjut atau manfaat ekstra.</p>
            </div>
        </div>
    
        </div>

    
</div>


<script>

    const aa = document.querySelectorAll('.a');

    aa.forEach(aa => {
        const icon = aa.querySelector('.icon');
        const answer = aa.querySelector('.answer');

        aa.addEventListener('click', () => {
            
            if(icon.classList.contains('active')) {
                icon.classList.remove('active');
                answer.classList.remove('active');
                answer.style.maxHeight = null;
            } else {
                icon.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 8 + 'px';
                answer.classList.add('active');
            }
            
        })
    })
</script>




@endsection

