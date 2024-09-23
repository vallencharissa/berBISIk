@extends('layout/layout')

@section('title', 'Tambah Detail Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tambahJadwalAcara.css') }}"> 
</body>

@section('content')
    

    <form method="POST" action="jadwalAcara?jumlahSesi={{ request()->query('jumlahSesi') }}" >
        @csrf

        {{-- <label for="">ID Acara</label>
        <input name="event_id" type="number" value="{{ request()->query('id') }}" readonly>

        <label for="">Jumlah Sesi</label>
        <input name="session" type="number" value="{{ request()->query('jumlahSesi') }}" readonly> --}}

        @for ($i = 1; $i <= request()->query('jumlahSesi') ;$i++)

        <div class="case">
            <label class="section" for="">Sesi {{ $i }}</label>
            <div class="input">
                <label for="">Nama Sesi</label>
                <input name="name{{ $i }}" type="text" id="name{{ $i }}" value="{{ old('name' . $i) }}">
            </div>

            @if ($errors->has('name' . $i))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ $errors->first('name' . $i) }}</li>
                    </ul>
                </div>
            @endif

            <div class="input">
                <label for="">Deskripsi</label>
                <textarea name="description{{ $i }}" type="text" id="description{{ $i }}" cols="60" rows="6">{{ old('description' . $i) }}</textarea>
            </div>

            @if ($errors->has("description$i"))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first("description$i") }}</li>
                </ul>
            </div>
            @endif

            <div class="input">
                <label for="">Tanggal</label>
                <input name="date{{ $i }}" type="date" id="date{{ $i }}"  value="{{ old('date' . $i) }}">
            </div>

            @if ($errors->has("date$i"))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first("date$i") }}</li>
                </ul>
            </div>
            @endif

            <div class="input">
                <label for="">Waktu Mulai</label>
                <input name="time_start{{ $i }}" type="time" id="time_start{{ $i }}"  value="{{ old('time_start' . $i) }}">
            </div>

            @if ($errors->has("time_start$i"))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first("time_start$i") }}</li>
                </ul>
            </div>
            @endif

            <div class="input">
                <label for="">Waktu Selesai</label>
                <input name="time_end{{ $i }}" type="time" id="time_end{{ $i }}" value="{{ old('time_end' . $i) }}">

            @if ($errors->has("time_end$i"))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first("time_end$i") }}</li>
                </ul>
            </div>
            @endif
        </div>
        @endfor

        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>

    
    
@endsection