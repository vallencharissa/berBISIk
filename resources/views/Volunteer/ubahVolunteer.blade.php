@extends('layout/layout')

@section('title', 'Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/ubahAcara.css') }}">
</body>

@section('content')
<section>
    <form method="POST" action="/ubahVolunteer/{{ $volunteer->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <h1>Ubah Acara Relawan</h1>
    
        <div class="card">
    
            <div class="input">
                <label for="">Judul Volunteer</label>
                <textarea name="title" type="text" id="title">{{ $volunteer->title }}</textarea>
            </div>
    
            <div class="input">
                <label for="">Deskripsi Singkat</label>
                <textarea name="short_description" type="text" id="short_description">{{ $volunteer->volunteer_event_details->short_description }}</textarea>
            </div>
    
            <div class="input">
                <label for="">Kriteria</label>
                <textarea name="criteria" type="text" id="criteria">{{ $volunteer->volunteer_event_details->criteria }}</textarea>
            </div>
    
            <div class="input">
                <label for="">Keuntungan</label>
                <textarea name="benefit" type="text" id="benefit">{{ $volunteer->volunteer_event_details->benefit }}</textarea>
            </div>
    
            <div class="input">
                <label for="">Jumlah Peserta</label>
                <input name="seat" type="number" id="seat" value={{ $volunteer->volunteer_event_details->seat }}>
            </div>
    
            <div class="input">
                <label for="">Lokasi</label>
                <textarea name="location" type="text" id="location">{{ $volunteer->location }}</textarea>
            </div>
    
            <div class="input">
                <label for="">Masukkan Foto</label>
                <input name="photo" type="file" id="photo">
                @if ( $volunteer->photo != null)
                    <p>Foto yang sebelumnya: {{ $volunteer->photo }}</p>
                    <img src="{{ asset('assets/fotoVolunteer/'.$volunteer->photo)  }}" alt="">
                @endif
            </div>
    
            <div class="input">
                <label for="">Link Grup WhatsApp</label>
                <input name="whatsapp_link" type="text" id="whatsapp_link" value={{ $volunteer->volunteer_event_details->whatsapp_link }}>
            </div>
    
            <div class="input">
                <label for="">Link Zoom</label>
                <input name="zoom_link" type="text" id="zoom_link" value={{ $volunteer->volunteer_event_details->zoom_link }}>
            </div>
            
        </div>
        
        <h1>Ubah Jadwal Acara Relawan</h1>
    
        <div class="card">
            <div class="input">
                <label for="">Nama Sesi</label>
                <textarea name="name" type="text" id="name">{{ $volunteer->volunteer_event_schedules->name }}</textarea>
            </div>
    
            <div class="input">
                <label for="">Tanggal</label>
                <input name="date" type="date" id="date" value={{ $volunteer->volunteer_event_schedules->date }}>
            </div>
            <div class="input">
                <label for="">Waktu Mulai</label>
                <input name="time_start" type="time" id="time_start" value={{ $volunteer->volunteer_event_schedules->time_start }}>
            </div>
            <div class="input">
                <label for="">Waktu Selesai</label>
                <input name="time_end" type="time" id="time_end" value={{ $volunteer->volunteer_event_schedules->time_end }}>
            </div>
        </div>
        
        <button type="submit">Simpan</button>
        
    
    </form>
</section>

@endsection