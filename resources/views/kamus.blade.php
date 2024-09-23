@extends('layout/layout')

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoOnly.png') }}">

@section('title', 'Kamus')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kamusPage.css') }}">
</body>

    @section('content')
    <div>
        <form action="{{ route('kamus.huruf') }}">
            <button type="submit" class="btnksg">HURUF</button>
            <label for="" class="btnfull">KATA DAN KALIMAT</label>
        </form>
    </div>
    
    <h2 class="judul">PENCARIAN KATA ATAU KALIMAT</h2>

    <div class="searchcontainer">
        <form action="" method="GET">
            <div class="search-box">
                <input class="search" name="keyword" type="text"
                    placeholder="Masukkan Kata atau Kalimat"
                    id="input-word"/>
                <button id="search-btn" class="btnsearch">Cari</button>
            </div>
        </form>
    
            <div class="result" id="result">
                @if(isset($kamusCari) && count($kamusCari) > 0)
                    <p class="res">Bahasa Isyarat dari</p>
                    <div class="container2">
                        @foreach ($kamusCari as $kata)
                            <div class="kotak">
                            @if (file_exists(public_path('assets/kamus/kata/' . $kata->picture)))
                                <img src="{{ asset('assets/kamus/kata/'. $kata->picture) }}" alt="{{ $kata->word }}">
                            @else
                                <img src="{{ asset('assets/kamus/huruf/'. $kata->picture) }}" alt="{{ $kata->word }}">
                                
                            @endif
                            
                                <div class="boxkata">
                                    <p>{{ $kata->word }}</p>
                                </div>            
                            </div>
                        @endforeach                      
                    </div>
                @endif
            </div>     
    </div>
 
    <div>
        <h2 class="katadsr">KATA DASAR BAHASA ISYARAT</h2>
        <div class="kata-dasar">
            <div class="container1">
                @foreach ($daftarKamus as $kata)
                <div class="kotak">
                    <img src="{{ asset('assets/kamus/kata/'. $kata->picture) }}" alt="{{ $kata->word }}">
                    <div class="boxkata">
                        <p>{{ $kata->word }}</p>
                    </div>     
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="copyright-illustration">
        <p>&copy; Illustration by Si Unyu Comic on Facebook</p>
    </div>
@endsection