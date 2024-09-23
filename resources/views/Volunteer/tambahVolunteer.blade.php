@extends('layout/layout')

@section('title', 'TambahVolunteerAcara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tambahAcara.css')  }}">
</body>

@section('content')
    <section>
        <form method="POST" action="volunteer" enctype="multipart/form-data">
            @csrf
    
            <h1>Tambah Acara Relawan</h1>
    
            <div class="card">
    
                <div class="input">
                    <label for="">Judul Volunteer Acara</label>
                    <input name="title" type="text" id="title" value="{{ old('title') }}">
                </div>
    
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('title') }}</li>
                        </ul>
                    </div>
                @endif

                <div class="input">
                    <label for="">Deskripsi Singkat</label>
                    <input name="short_description" type="text" id="short_description" value="{{ old('short_description') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('short_description') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Keuntungan</label>
                    <input name="benefit" type="text" id="benefit" value="{{ old('benefit') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('benefit') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Kriteria</label>
                    <input name="criteria" type="text" id="criteria" value="{{ old('criteria') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('criteria') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Jumlah Peserta</label>
                    <input name="seat" type="number" id="seat" value="{{ old('seat') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('seat') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Lokasi</label>
                    <input name="location" type="text" id="location" value="{{ old('location') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('location') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Masukkan Foto</label>
                    <input name="photo" type="file" id="photo">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('photo') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Link Grup WhatsApp</label>
                    <input name="whatsapp_link" type="text" id="whatsapp_link" value="{{ old('location') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('whatsapp_link') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Link Zoom</label>
                    <input name="zoom_link" type="text" id="zoom_link" value="{{ old('location') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('zoom_link') }}</li>
                        </ul>
                    </div>
                @endif
                
            </div>
            
    
            <h1>Tambah Jadwal Acara Relawan</h1>
            
            <div class="card">
                <div class="input">
                    <label for="">Nama Jadwal</label>
                    <input name="name" type="text" id="name" value="{{ old('name') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('name') }}</li>
                        </ul>
                    </div>
                @endif
    
                <div class="input">
                    <label for="">Tanggal</label>
                    <input name="date" type="date" id="date" value="{{ old('date') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('date') }}</li>
                        </ul>
                    </div>
                @endif

                <div class="input">
                    <label for="">Waktu Mulai</label>
                    <input name="time_start" type="time" id="time_start" value="{{ old('time_start') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('time_start') }}</li>
                        </ul>
                    </div>
                @endif

                <div class="input">
                    <label for="">Waktu Selesai</label>
                    <input name="time_end" type="time" id="time_end" value="{{ old('time_end') }}">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('time_end') }}</li>
                        </ul>
                    </div>
                @endif
            </div>
    
            <button type="submit">Simpan</button>
            
    
        </form>
    </section>
    

@endsection
