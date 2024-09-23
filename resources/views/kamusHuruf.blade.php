@extends('layout/layout')

<link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoOnly.png') }}">

@section('title', 'Kamus')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kamusHuruf.css') }}">
</body>

    @section('content')
    <div>
        <form action="{{ route('kamus') }}">
            <label for="" class="btnfull">HURUF</label>
            {{-- <button class="btnksg">HURUF</button> --}}
            <button type="submit" class="btnksg">KATA DAN KALIMAT</button>
        </form>
        
    </div>

    <div>
        <h2 class="hurufdsr">HURUF DASAR BAHASA ISYARAT</h2>
        <div class = "huruf">
            <div class="container2">
                @foreach ($daftarHuruf as $huruf)
                <div class="kotak">
                    <img src="{{ asset('assets/kamus/huruf/'. $huruf->picture) }}" alt="{{ $huruf->word }}">
                    <div class="teks">{{ $huruf->word }}</div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

    <div class="copyright-illustration">
        <p>&copy; Illustration by Si Unyu Comic on Facebook</p>
    </div>

@endsection

