@extends('layout/layout')

@section('title', $acara->title)

<link rel="stylesheet" href="{{ asset('css/detailAcara.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
@section('content')
<div class="back">
    <a href="/acara">< Kembali</a>
</div>

<div class="container">
    <div class="info">
        <div class="img_title">
            <div class="img_kelas">
                <div class="kotak"></div>
                <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="" class="foto_acara">
            </div>
            <h1>{{ $acara->title }}</h1>
        </div>
       

        <div class="detail"> 
            <div class="desc_acara">
                <h1>{{ $acara->title }}</h1>
                <p>{{ $acara->event_details->short_description }}</p>
                <h3>Keuntungan</h3>
                <ul>
                    @foreach(explode("\n", $acara->event_details->benefit) as $benefit)
                        @if (strpos($benefit, '.') !== false)
                            <?php $points = explode('.', $benefit); ?>
                            @foreach($points as $key => $point)
                                @if ($loop->last && $key === count($points) - 1)
                                    <li>{{ $point }}</li>
                                @else
                                    <li><i class="fa-solid fa-circle-check"></i> {{ $point }}</li>
                                @endif
                            @endforeach
                        @else
                            <li>{{ $benefit }}</li>
                        @endif
                    @endforeach
                </ul>                                           
            </div>

            <div class="jadwal_acara">
                <div class="infojadwal">
                    <div>
                        <i class="fa-regular fa-calendar"></i>
                        <span>{{ $acara->event_schedules->first()->date->format('j F Y')}}</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-clock"></i>
                        <span>{{ substr($acara->event_schedules->first()->time_start, 0, -3) }} - {{ substr($acara->event_schedules->first()->time_end, 0, -3)}} WIB</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-compass"></i>
                        <span>{{ $acara->location }}</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-flag"></i>
                        <span>{{ $acara->event_details->seat }} seats only</span>
                    </div>
                </div>

                <div class="daftar">
                    <div>
                        <h3>{{ 'Rp'.number_format($acara->price, 0, ',', '.') }}</h3>
                    </div>
                    
                    @if (Auth::user()->users_events->contains('event_id', $acara->id))
                        <a href="" readonly="true" class="readonly-link">Sudah Terdaftar</a>
                    @else
                        <a href="daftarAcara/{{ $acara->id }}">Daftar Sekarang</a>
                    @endif
                    
                </div>
            </div>
        </div>   
    </div>

    <div class="bg">
        <div class="instructor">
            <div class="instructor_photo">
                <img src="{{ asset('assets/fotoAcara/profil1.png') }}" alt="">
            </div>
            <div class="instructor_detail">
                <h3>{{ $acara->instructors->name }}</h3>
                <hr>
                <p>{{ $acara->instructors->description }}</p>
            </div>
        </div>

        <div class="ikhitisar">
            <h1>Ikhitisar Kelas</h1>
            @foreach ($acara->event_schedules as $jadwal)
                <div class="a">
                    <div class="minggu">
                        <h3>{{ $jadwal->name }}</h3>
                        <i class="icon fa-solid fa-caret-down"></i>
                    </div>
                    <div class="isiminggu">
                        <p>{{ $jadwal->description }}</p>
                    </div>
                </div>
            @endforeach
        
        @if (count($acara->reviews) > 0)
        <div class="bisik">
            <div class="bisi">
                <h1><span>BISI</span>Kan Mereka </h1>
                <div class="reviews">
                    @foreach($acara->reviews as $review)
                        <div class="reviewbox">
                            <div class="userinfo">
                                <img src="{{ asset('assets/fotoUser/'.$review->user->photo) }}" class="fotouser">
                                <div class="namauser">
                                    <h3>{{ $review->user->name }}</h3>
                                </div>
                                <div class="rating">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $review->rating)
                                            <i class="fa-solid fa-star"></i>
                                        @else
                                            <i class="fa-regular fa-star"></i>
                                        @endif
                                    @endfor
                                    <span>{{ $review->rating }}.0</span>
                                </div>
                            </div>
                            <p class="comment">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<script>
    const aa = document.querySelectorAll('.a');

    aa.forEach(aa => {
        const icon = aa.querySelector('.icon');
        const answer = aa.querySelector('.isiminggu');

        aa.addEventListener('click', () => {
            if (icon.classList.contains('active')) {
                icon.classList.remove('active');
                answer.style.maxHeight = null;
            } else {
                icon.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });
</script>

@endsection
