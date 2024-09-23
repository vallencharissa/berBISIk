@extends('layout/layout')

<link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoOnly.png') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>

@section('title', 'Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/acara.css') }}">
    {{-- js --}}
<script src="{{asset('js/acara.js') }}" defer></script>
</body>

@section('content')
{{-- insert code here --}}

<div class="search">
    <div class="text-search">
        <h2>Yuk, intip acara menarik</h2>
        <h1>Ber<span>BISI</span>k!</h1>
    </div>

    <div class="searchcontainer">
        <div class="search-box">
            <input class="search-box2" type="text"
                placeholder="Cari program"
                id="input-word"/>
            <button id="search-btn" class="btnsearch">Cari</button>
        </div>
    </div>
</div>


<section class="progress-section">
    <div class="progress">
        <h2>Progres Kelas yang Sedang Kamu Ambil</h2>

        <div class="progress_container">
    
            @foreach($daftarProgress as $acara)
            <div class="progres_kelas" data-session-done="{{ $acara->session_done }}" data-session="{{ $acara->events->event_details->session }}">
                <div class="img_progress">
                    <img src="{{ asset('assets/fotoAcara/'.$acara->events->photo)  }}" alt="">
                </div>
               
                <div class="desc_kelas">
                    <p class="tipe_kelas">Tipe: {{ $acara->events->event_types->name }}</p>
                    <p class="judul_kelas">{{ $acara->events->title }}</p>
                    <p class="sesi_kelas"> {{ $acara->session_done }}/{{ $acara->events->event_details->session }} sesi</p>
                </div>
    
                {{-- progress barnya --}}
                <div class="persen">
                    <span class="value-percentage">0%</span>
                </div>
            </div>
            @endforeach
    
        </div>
    </div>
</section>

<div class="section-container">
    <section class="class-section">
        <div class="kelas">
            <div class="judul2">
                <div class="judul">
                    <img class="judul-icon" src="assets/acara/Group 43.png" alt="">
                    <h2>Kelas yang Tersedia</h2>
                </div>
            
                @if(Auth::user()->role_id == 2)
                <a href="tambahAcara">Tambah Acara Baru</a>
                @endif
                
            </div>
            
            {{-- container tuh isinya card cardnya --}}
            <div class="container">
                @foreach ($daftarAcara as $acara)
                <a href="acara/{{ $acara->id }}">
                {{-- c2 isinya satu card --}}
                <div class="c2">
                    <div class="tipe">
                        <p>{{ $acara->event_types->name }}</p>
                    </div>
            
                    <div class="kelas_card">
                        <div class="img_container">
                            {{-- <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="">
                            <div class="modify_button">
                                <a href="ubahAcara/{{ $acara->id }}"><img src="assets/icon/edit.png" alt=""></a>
                            </div> --}}
        
                            {{-- ada yang salah keknya gabisa a href di dalam a href jadinya href buat nge
                                redirect ke detail acara error :) --}}
                                <!-- vallen tambahin a href kebawah di bagian card biar bisa di pencet juga bawahnya" -->
                                
                            <div class="img_kelas">
                                <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="">
                            </div>
        
                            @if(Auth::user()->role_id == 2)
                            <div class="modify_button_container">
                                <div class="modify_button">
                                    <a href="ubahAcara/{{ $acara->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                </div>
                
                                <div class="modify_button">
                                    <a href="hapusAcara/{{ $acara->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                </div>
                            </div>
                            @endif
                            
                        </div>
                        
        
                        <div class="card">
                        <!-- tambahin a href disini karena emang gambar sama card itu beda container -->
                        <a href="acara/{{ $acara->id }}">
                            <h3 class="judul_acara">{{ $acara->title }}</h3>
                            <div class="pengajar">
                                <div class="profil_pengajar">
                                    <img src="{{ asset('assets/fotoPengajar/'.$acara->instructors->photo)  }}" alt="">
                                </div>
                    
                                <div class="deskripsi_pengajar">
                                    <p>{{ $acara->instructors->name }}</p>
                                    <p>{{ $acara->instructors->job }}</p>
                                </div>
                            </div>
                            
                            <div class="icon">
                                <i class="fa-regular fa-calendar"></i>
                                <h3>
                                    {{ $acara->event_schedules->first()->date->format('j M Y')}}
                                    @if ( count($acara->event_schedules) > 1)
                                        - {{ $acara->event_schedules->last()->date->format('j M Y') }}
                                    @endif
                                </h3>
                            </div>
                
                            <div class="icon">
                                <i class="fa-regular fa-clock"></i>
                                <h3>{{ substr($acara->event_schedules->first()->time_start, 0, -3) }} - 
                                    {{ substr($acara->event_schedules->first()->time_end, 0, -3)}} WIB</h3>
                            </div>
                            
                            <div class="rating">
                                @php
                                    $total = 0;
                                    $jumlahuser = count($acara->reviews);
                                    foreach ($acara->reviews as $review) {
                                        $total += $review->rating;
                                    }
                                    $avgrating = $jumlahuser > 0 ? $total / $jumlahuser : 0;
                                @endphp
                            
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $avgrating)
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                                <span>{{ number_format($avgrating, 1) }}</span>
                            </div>
                            
                            @if (Auth::user()->users_events->contains('event_id', $acara->id))
                                <h3>Sudah Terdaftar</h3>
                            @else
                                <h3>Rp{{ number_format($acara->price, 0,',', '.')  }}</h3>
                            @endif
                            
                        </div>
                    </div>
                </div>
        
                </a>
                @endforeach
            </div>
        </div>
    </section>
    
    <section class="volunteer-section">
        <div class="relawan">
            <div class="judul2_relawan">
                <div class="judul_relawan">
                    <img class="judul-icon" src="assets/acara/Group 63.png" alt="">
                    <h2>Bantu Menjadi Relawan</h2>    
                </div>
        
                @if(Auth::user()->role_id == 2)
                <a href="tambahVolunteer">Tambah Acara Relawan Baru</a>
                @endif
            </div>
            
        
            <div class="container">
                @foreach($daftarVolunteer as $relawan)
        
                {{-- masih salah ke detail acaranya --}}
                <a href="volunteer/{{ $relawan->id }}">
        
                <div class="c2_relawan">
                    {{-- <div class="tipe">
                        @if (rand(1,100) % 2 == 0)
                            <p>Panitia</p>
                        @else
                            <p>Penerjemah</p>
                        @endif
                    </div> --}}
            
                    <div class="kelas_card">
                        <div class="img_container">
                                
                            <div class="img_kelas">
                                <img src="{{ asset('assets/fotoVolunteer/'.$relawan->photo)  }}" alt="">
                            </div>
                            
                            @if(Auth::user()->role_id == 2)
                            <div class="modify_button_container">
                                <div class="modify_button">
                                    <a href="ubahVolunteer/{{ $relawan->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                </div>
                
                                <div class="modify_button">
                                    <a href="hapusVolunteer/{{ $relawan->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                </div>
                            </div>
                            @endif
                            
                        </div>
        
                        <div class="card">
                            <a href="volunteer/{{ $relawan->id }}">
                            <h3 class="judul_acara">{{ $relawan->title }}</h3>
                
                            <div class="icon_relawan">
                                <i class="fa-regular fa-compass"></i>
                                <h3>{{ $relawan->location}}</h3>
                            </div>
                
                            <div class="icon_relawan">
                                <i class="fa-regular fa-calendar"></i>
                                <h3>{{ $relawan->volunteer_event_schedules->date->format('j M Y') }}</h3>
                            </div>
                
                            <div class="icon_relawan">
                                <i class="fa-regular fa-clock"></i>
                                <h3>{{ substr($relawan->volunteer_event_schedules->time_start, 0, -3) }} - 
                                    {{ substr($relawan->volunteer_event_schedules->time_end, 0, -3)}} WIB</h3>
                            </div>
                        </div>
                    </div>
                </div>       
                </a>
        
                @endforeach
            </div>
        </div>
    </section>
</div>


@endsection