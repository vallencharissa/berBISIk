@extends('layout/layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoOnly.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
</html>

    @section('title', 'Beranda')

    @section('content')

        <div class="Home">
        <div class="mainSlide">
            <div>
                <h1>Ingin Belajar Bahasa Isyarat? </h1>
                <div class="paragrap">
                    <p>Dengan<span> Ber</span><span>BISI</span><span>k </span>kalian bisa belajar mandiri dengan 
                        kamus BISINDO dan berbagai fitur pencarian kata hingga alfabet  </p>
                </div>
                <div class="hashtag">
                    <p>#BerbahasaIsyaratIndonesiaAsik</p>
                </div>
                <div>
                    <a href="/kamus"><button class="btn" >Kamus BISINDO</button></a>
                </div>
            </div>
           
            <div>
                <div class="home">
                    
                    <img src="{{ asset('assets/homePic.png') }}" alt="photo orang">
                </div>
            </div>
        </div>
        </div>
          <!-- Main end -->

          <!-- bisindo start  -->

        <div class="bisindo">
            <div class="mainBisindo">
                <div>
                    <div class="BisiPic">
                        <img src="{{ asset('assets/orgBisi.png') }}" alt="photo orang">
                    </div>
                </div>

                <div class="judulBisi">
                    <h1>BISI<span>NDO</span></h1>
                    <div class="txtBisi">
                        <p>merupakan <span>bahasa ibu</span> yang tumbuh secara alami pada kalangan komunitas Tuli di Indonesia.</p>
                    </div>
                    <div class="txtBisi2">
                        <p>Tidak ada batasan dalam berkomunikasi! Di Indonesia, 
                            lebih dari <span>2.500.000</span> individu menghadapi tantangan dalam mendengar. 
                            BISINDO, Bahasa Isyarat Indonesia, bukan hanya alat komunikasi yang efektif 
                            bagi komunitas tuli, tetapi juga merangkul semua orang.</p>
                    </div>
                </div>

            </div>
        </div>

          <!-- bisindo end  -->

          <!-- manfaat bisindo start  -->
    
    <div class="Manfaat">
        <div class="tes">
            <div class="gar1"></div>  
            <div class="judul">
                <h1>Manfaat ber<span>BISI</span>NDO</h1>
            </div>
            <div class="gar2"></div>
        </div>
            
        <br> 
        <div class="process-wrapper">
            <div id="progress-bar-container">
                <ul>
                    <li class="step step01 active">
                        <div class="step-inner">SOLIDARITAS</div>
                    </li>

                    <li class="step step02">
                        <div class="step-inner">INKLUSI</div>
                    </li>

                    <li class="step step03">
                        <div class="step-inner">BUDAYA</div>
                    </li>

                    <li class="step step04">
                        <div class="step-inner">KARIR</div>
                    </li>
                </ul>
                
                <div id="line">
                    <div id="line-progress"></div>
                </div>
            </div>

         -

            <div id="progress-content-section">
                <div class="section-content discovery active">
                    <p>Belajar bahasa isyarat merupakan solidaritas terhadap komunitas pendengar 
                        yang membantu memperkuat hubungan di antara individu dengan keberagaman 
                        yang ada di lingkup masyarakat</p>
                </div>
                
                <div class="section-content strategy">
                    <p>BISINDO memungkinkan partisipasi penuh individu dengan gangguan pendengaran 
                        dalam masyarakat. Belajar BISINDO mempermudah komunikasi antara mereka dan 
                        orang-orang yang menggunakan bahasa isyarat sebagai bahasa pertama.</p>
                </div>
                
                <div class="section-content creative">
                    <p>Bahasa Isyarat tidak hanya tentang komunikasi, tetapi juga tentang budaya 
                        dan identitas. Belajar BISINDO membuka pintu untuk memahami budaya dan kehidupan 
                        sehari-hari dari perspektif yang berbeda.</p>
                </div>
                
                <div class="section-content production">
                    <p>Memiliki keterampilan dalam BISINDO dapat menjadi keunggulan 
                        besar dalam banyak profesi, terutama yang berhubungan dengan 
                        pelayanan sosial, pendidikan khusus, atau pekerjaan kesehatan.</p>
                </div>
                
            </div>
        </div>

    </div>
    
          
          <!-- manfaat bisindo end  -->

          <!-- acara start  -->

          <div class="heading">
            <h1>Acara Bersama Ber<span>BISI</span>k</h1>
        </div>
        <section class="product">
        
            
            <div class="boxContainer">
                <div class="box">
                    <img src="{{ asset('assets/1.png') }}" alt="">
                    <h2>Workshop</h2>
                    <p>Sesi perkenalan BISINDO dimulai dari pengenalan budaya
                         Tuli serta pengajaran Bisindo dasar
                    </p>
                    <br><br>
                    <a href="/acara">Lebih Detail ></a>
                </div>

                <div class="box">
                    <img src="{{ asset('assets/2.png') }}" alt="">
                    <h2>Kolaborasi</h2>
                    <p>Bergabung dalam program kolaborasi untuk membangun 
                        program inklusif bagi komunitas tuli dengan <span>Ber</span><span>BISI</span><span>k</span>
                    </p>
                    <br>
                    <a href="/acara">Lebih Detail ></a>
                </div>

                <div class="box">
                    <img src="{{ asset('assets/3.png') }}" alt="">
                    <h2>Webinar</h2>
                    <p>Bertemu secara daring dengan narasumber untuk 
                        mengetahui lebih lanjut tentang bahasa isyarat
                    </p>
                    <br>
                    <a href="/acara">Lebih Detail ></a>
                </div>

                <div class="box">
                    <img src="{{ asset('assets/4.png') }}" alt="">
                    <h2>Kelas Daring</h2>
                    <p>Sesi pembelajaran BISINDO secara daring bersama tim <span>Ber</span><span>BISI</span><span>k</span></p>
                    <br><br>
                    <a href="/acara">Lebih Detail ></a>
                </div>
            </div>
    </section>

          <!-- acara end  -->

          <!-- kolab startt  -->

        <div class="collab">
            <div class="txtCollab">
                <div class="judulCollab">
                    <h1>Kolaborasi</h1>
                    <p><span>Ber</span><span>BISI</span><span>k</span> 
                    telah menjalani kolaborasi dengan berbagai perusahaan ternama</p>
                </div>
                <div class="imgCollab">
                    <img src="{{ asset('assets/garuda.png') }}" alt="">
                </div>
                <div class="imgCollab2">
                    <img src="{{ asset('assets/fund.png') }}" alt="">
                </div>
                <div class="imgCollab3">
                    <img src="{{ asset('assets/binus.png') }}" alt="">
                </div>
                <div class="imgCollab4">
                    <img src="{{ asset('assets/traveloka.webp') }}" alt="">
                </div>
            </div>   
        </div>

          <!-- kolab end  -->

 
          <!-- tentang kami start  -->

          <div class="tentang">
            <div class="kami">
                <h1>Mari Belajar Dengan Ber<span>BISI</span>k</h1>
                
            </div>
            <div class="btnKamii">
                <a href="/tentangKami"><button class="btnKami">Tentang Kami</button></a>
            </div>
            
            <div class="tangan">
            <img src="{{ asset('assets/hand.png') }}" alt="photo tangan isyarat">
            </div>
          </div>

          <!-- tentang kami end  --> 
    
   
</body>
<script>
    
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "33%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "66%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "100%");
	$(".production").addClass("active").siblings().removeClass("active");
});
    </script>
     @endsection
