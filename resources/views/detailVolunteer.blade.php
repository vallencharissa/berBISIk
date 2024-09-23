@extends('layout/layout')

<link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoAja.png') }}">

@section('title', $volunteer->title)

<link rel="stylesheet" href="{{ asset('css/detailVolunteer.css') }}">
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
                <img src="{{ asset('assets/fotoVolunteer/'.$volunteer->photo)  }}" alt="" class="foto_acara">
            </div>
            <h1>{{ $volunteer->title }}</h1>
        </div>
        

        <div class="detail"> 
            <div class="desc_acara">
                <h1>{{ $volunteer->title }}</h1>
                <p>{{ $volunteer->volunteer_event_details->short_description }}</p>
                <h3>Keuntungan</h3>
                <ul>
                    @foreach(explode("\n", $volunteer->volunteer_event_details->benefit) as $benefit)
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
                        <span>{{ $volunteer->volunteer_event_schedules->first()->date->format('j F Y')}}</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-clock"></i>
                        <span>{{ substr($volunteer->volunteer_event_schedules->first()->time_start, 0, -3) }} - {{ substr($volunteer->volunteer_event_schedules->first()->time_end, 0, -3)}} WIB</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-compass"></i>
                        <span>{{ $volunteer->location }}</span>
                    </div>
                    <div>
                        <i class="fa-regular fa-flag"></i>
                        <span>{{ $volunteer->volunteer_event_details->seat }} seats only</span>
                    </div>
                </div>

                <div class="daftar">
                    @if (Auth::user()->users_volunteer_events->contains('volunteer_event_id', $volunteer->id))
                        <a href="" readonly="true" class="readonly-link">Sudah Terdaftar</a>
                    @else
                        <a href="daftarVolunteer/{{ $volunteer->id }}">Daftar Sekarang</a>
                    @endif
                </div>
            </div>
        </div>   
    </div>

    <div class="pekerjaan">
        <div class="detil">
            <h1>Detil Pekerjaan</h1>
        </div>
        <div class="kriteria">
            <h3>Kriteria Relawan:</h3>
            <ul>
                @foreach(explode("\n", $volunteer->volunteer_event_details->criteria) as $criteria)
                    @if (strpos($criteria, '.') !== false)
                        <?php $points = explode('.', $criteria); ?>
                        @foreach($points as $key => $point)
                            @if ($loop->last && $key === count($points) - 1)
                                <li>{{ $point }}</li>
                            @else
                                <li><i class="fa-solid fa-circle circle"></i> {{ $point }}</li>
                            @endif
                        @endforeach
                    @else
                        <li>{{ $criteria }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection