@extends('layout/layout')

@section('title', 'Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/ubahAcara.css') }}">
</body>

@section('content')
<section>
    <form method="POST" action="/ubahAcara/{{ $acara->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h1>Ubah Acara</h1>

    <div class="card">
        <div class="input">
            <label for="">Tipe Acara</label>
            <select name="event_type_id" id="event_type_id" required>
                <option value="{{ $acara->event_type_id }}">{{ $acara->event_types->name }}</option>
                @foreach ($daftarTipeAcara as $tipeAcara)
                    <option value="{{ $tipeAcara->id }}">{{ $tipeAcara->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="input">
            <label for="">Judul Acara</label>
            <textarea name="title" type="text" id="title">{{ $acara->title }}</textarea>
        </div>

        <div class="input">
            <label for="">Deskripsi Singkat</label>
            <textarea name="short_description" type="text" id="short_description">{{ $acara->event_details->short_description }}</textarea>
        </div>

        <div class="input">
            <label for="">Keuntungan</label>
            <textarea name="benefit" type="text" id="benefit">{{ $acara->event_details->benefit }}</textarea>
        </div>

        <div class="input">
            <label for="">Jumlah Sesi</label>
            <select name="session" id="session" required>
                <option value="{{ $acara->event_details->session }}">{{ $acara->event_details->session }}</option>
                @for ($i = 1; $i <= 12; $i++)
                    @if ($i != $acara->event_details->session)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endif
                @endfor
            </select>
        </div>

        <div class="input">
            <label for="">Jumlah Peserta</label>
            <input name="seat" type="number" id="seat" value={{ $acara->event_details->seat }}>
        </div>

        <div class="pengajar">
            <div class="input_pengajar">
                <label for="">Nama Pengajar</label>
                <select name="instructor_id" id="instructor_id" required>
                    <option value="{{ $acara->instructor_id }}">{{ $acara->instructors->name  }}</option>
                    @foreach ($daftarPengajar as $pengajar)
                        <option value="{{ $pengajar->id }}">{{ $pengajar->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="input_pengajar">
                <p>Tidak ada nama pengajar yang sesuai?</p>
                <a href="/tambahPengajar">Tambahkan di sini</a>
            </div>
            
        </div>

        <div class="input">
            <label for="">Biaya</label>
            <input name="price" type="text" id="price" value={{ $acara->price }}>
        </div>

        <div class="input">
            <label for="">Lokasi</label>
            <textarea name="location" type="text" id="location">{{ $acara->location }}</textarea>
        </div>

        <div class="input">
            <label for="">Masukkan Foto</label>
            <input name="photo" type="file" id="photo">
            @if ( $acara->photo != null)
                <p>Foto yang sebelumnya: {{ $acara->photo }}</p>
                <img src="{{ asset('assets/fotoAcara/'.$acara->photo)  }}" alt="">
            @endif
        </div>

        <div class="input">
            <label for="">Link Grup WhatsApp</label>
            <input name="whatsapp_link" type="text" id="whatsapp_link" value={{ $acara->event_details->whatsapp_link }}>
        </div>

        <div class="input">
            <label for="">Link Zoom</label>
            <input name="zoom_link" type="text" id="zoom_link" value={{ $acara->event_details->zoom_link }}>
        </div>
        
    </div>
    
    
    <button type="submit">Selanjutnya</button>
    

</form>
</section>

@endsection