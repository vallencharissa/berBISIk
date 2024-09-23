@extends('layout/layout')

@section('title', 'Hapus Acara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/hapusAcara.css') }}">
</body>

@section('content')

    <div class="case">
        <h3>Apakah Anda yakin ingin menghapus acara {{ $acara->title }}?</h3>

        <div class="case2">
            <form style="display: inline-block"action="/hapusAcara/{{ $acara->id }}" method="post">
                @csrf
                @method('delete')
                <div class="submit">
                    <button type="submit">Hapus</button>
                
                
            </form>
                
                    <a href="/acara" class="button" >Batal</a>
                </div>
        </div>
       

    </div>
   

@endsection