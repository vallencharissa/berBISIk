@extends('layout/layout')   

@section('title', 'Daftar Acara')

<link rel="stylesheet" href="{{ asset('css/daftarAcara.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('content')
    <section>
        <div>
            {{-- Jadi kayak halaman konfirmasi, tambahin metode pembayaran --}}
            <div class="back">
                <a href="{{ url()->previous() }}">< Kembali</a>
            </div>
            <form method="POST" action= "/daftarVolunteer/{{ $id }}">
             @csrf
                
                <div class="body">
                    <div class="kanan">
                        <div id="case-vol" class="case">
                            <div class="desc">
                                <h1>{{$volunteerEvent->title }}</h1>
                                <div class="infojadwal">
                                    <div>
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ $volunteerEvent->volunteer_event_schedules->first()->date->format('j F Y')}}</span>
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-clock"></i>
                                        <span>{{ substr($volunteerEvent->volunteer_event_schedules->first()->time_start, 0, -3) }} - {{ substr($volunteerEvent->volunteer_event_schedules->first()->time_end, 0, -3)}} WIB</span>
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-compass"></i>
                                        <span>{{ $volunteerEvent->location }}</span>
                                    </div>
    
                                    <div class="harga">
                                        <h3>{{ 'Rp'.number_format($volunteerEvent->price, 0, ',', '.') }}</h3>
                                    </div>
                                </div>
                            </div>
    
                            <div class="descFoto">
                                <div class="gambar">
                                    <img src="{{ asset('assets/fotoVolunteer/'.$volunteerEvent->photo)  }}" alt="" class="foto_acara">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="btn-vol" type="submit">Konfirmasi</button>
            </form>
        </div>
    </section>
    


@endsection
