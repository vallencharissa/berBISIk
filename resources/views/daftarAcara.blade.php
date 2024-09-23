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
            <form method="POST" action= "/daftarAcara/{{ $id }}">
             @csrf
                
                <div class="body">
                    <div class="kiri">
                        <div class="judul">
                            <h1>Metode Pembayaran</h1>
                        </div>
                        
                        <div class="kategori">
                            <h3>Bank</h3>
                            <div class="Bank">
                                
                                <input type="radio" id="bca" name="payment_method" value="bca">
                                <div class="logo">
                                 
                                    <img src="{{ asset('assets/bca.png') }}" alt="photo bca">
                                </div>
                
                                <div class="nama">
                                    <label for="bca"> BCA (Virtual Account)</label><br>
                                    <p>Bebas biaya admin</p>
                                </div>
    
                            </div>
                        </div>
                        <br>
    
                        <div class="kategori">
                            <h3>Pembayaran lainnya</h3>
                            <div class="lainnya">
    
                                <div class="ovo">
                                    <input type="radio" id="bca" name="payment_method" value="bca">
                                    <div class="logo">
                                        <img src="{{ asset('assets/ovo.png') }}" alt="photo ovo">
                                        
                                    </div>
    
                                    <div class="nama">
                                        <label for="bca"> ovo</label><br>
                                        <p>Biaya admin Rp5.000</p>
                                    </div>
                                </div>
    
                                <div class="gopay">
                                    
                                    <input type="radio" id="bca" name="payment_method" value="bca">
                                    <div class="logo">
                                        <img src="{{ asset('assets/gopay.png') }}" alt="photo gopay">
                                    </div>
                                            
                                    <div class="nama">
                                        <label for="bca"> Gopay</label><br>
                                        <p>Biaya admin Rp5.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="kanan">
                        <div class="case">
                            <div class="desc">
                                <h1>{{$event->title }}</h1>
                                <div class="infojadwal">
                                    <div>
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ $event->event_schedules->first()->date->format('j F Y')}}</span>
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-clock"></i>
                                        <span>{{ substr($event->event_schedules->first()->time_start, 0, -3) }} - {{ substr($event->event_schedules->first()->time_end, 0, -3)}} WIB</span>
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-compass"></i>
                                        <span>{{ $event->location }}</span>
                                    </div>
    
                                    <div class="harga">
                                        <h3>{{ 'Rp'.number_format($event->price, 0, ',', '.') }}</h3>
                                    </div>
                                </div>
                            </div>
    
                            <div class="descFoto">
                                <div class="gambar">
                                    <img src="{{ asset('assets/fotoAcara/'.$event->photo)  }}" alt="" class="foto_acara">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Konfirmasi</button>
            </form>
        </div>
    
    </section>
    

@endsection
