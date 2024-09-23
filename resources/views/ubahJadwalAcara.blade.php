@extends('layout/layout')

@section('title', 'Tambah Detail Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/ubahJadwalAcara.css') }}">
</body>

@section('content')
    <form method="POST" action="/ubahJadwalAcara/{{ $id }}" >
        @csrf
        @method('PUT')

        {{-- <label for="">ID Acara</label>
        <input name="event_id" type="number" value="{{ request()->query('id') }}" readonly>

        <label for="">Jumlah Sesi</label>
        <input name="session" type="number" value="{{ request()->query('jumlahSesi') }}" readonly> --}}

        @for ($i = 0; $i < request()->query('jumlahSesi') ;$i++)

        @if ($i < $jumlahSesiLama)
            <div class="case">
                <label for="">Sesi {{ $i+1 }}</label>
                <div class="input">
                    <label for="">Nama Sesi</label>
                    <textarea name="name{{ $i }}" type="text" id="name{{ $i }}">{{ $daftarJadwalAcara[$i]->name }}</textarea>
                </div>

                <div class="input">
                    <label for="">Deskripsi</label>
                    <textarea name="description{{ $i }}" type="text" id="description{{ $i }}">{{ $daftarJadwalAcara[$i]->description }}</textarea>
                </div>

                <div class="input">
                    <label for="">Tanggal</label>
                    <input name="date{{ $i }}" type="date" id="date{{ $i }}" value={{ $daftarJadwalAcara[$i]->date }}>
                </div>
                <div class="input">
                    <label for="">Waktu Mulai</label>
                    <input name="time_start{{ $i }}" type="time" id="time_start{{ $i }}" value={{ $daftarJadwalAcara[$i]->time_start }}>
                </div>
                <div class="input">
                    <label for="">Waktu Selesai</label>
                    <input name="time_end{{ $i }}" type="time" id="time_end{{ $i }}" value={{ $daftarJadwalAcara[$i]->time_end }}>
                </div>
            </div>

        @else
            <label for="">Sesi {{ $i+1 }}</label>
                <div>
                    <label for="">Nama Sesi</label>
                    <textarea name="name{{ $i }}" type="text" id="name{{ $i }}"></textarea>
                </div>

                <div>
                    <label for="">Deskripsi</label>
                    <textarea name="description{{ $i }}" type="text" id="description{{ $i }}"></textarea>
                </div>

                <div>
                    <label for="">Tanggal</label>
                    <input name="date{{ $i }}" type="date" id="date{{ $i }}">
                </div>
                <div>
                    <label for="">Waktu Mulai</label>
                    <input name="time_start{{ $i }}" type="time" id="time_start{{ $i }}" >
                </div>
                <div>
                    <label for="">Waktu Selesai</label>
                    <input name="time_end{{ $i }}" type="time" id="time_end{{ $i }}" >
                </div>
            </div>


        @endif
        
        @endfor
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>

    
    
@endsection