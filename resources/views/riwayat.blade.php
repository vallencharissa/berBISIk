<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat</title>
    <link rel="stylesheet" href="{{ asset('css/riwayat.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoAja.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="back">
        <a href="/profil">< Kembali</a>
    </div>

    <h1>Acara-acara yang sudah diikuti</h1>

    <div class="acara">
    @foreach ($daftarRiwayatAcara as $acaraUser)
            <a href="/acara/{{ $acaraUser->events->id }}">
                <div class="c2">
                    <div class="tipe">
                        <p>{{ $acaraUser->events->event_types->name }}</p>
                    </div>

                    <div class="kelas_card">
                        <div class="img_container">
                            <div class="img_kelas">
                                <img src="{{ asset('assets/fotoAcara/' . $acaraUser->events->photo) }}" alt="">
                            </div>

                            @if (Auth::user()->role_id == 2)
                                <div class="modify_button_container">
                                    <div class="modify_button">
                                        <a href="ubahAcara/{{ $acaraUser->events->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                    </div>

                                    <div class="modify_button">
                                        <a href="hapusAcara/{{ $acaraUser->events->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                    </div>
                                </div>
                            @endif

                        </div>

                        <div class="cardKelas">
                            <a href="acara/{{ $acaraUser->events->id }}">
                                <h3 class="judul_acara">{{ $acaraUser->events->title }}</h3>
                                
                                <div class="pengajar">
                                    <div class="profil_pengajar">
                                        <img src="{{ asset('assets/fotoPengajar/' . $acaraUser->events->instructors->photo) }}" alt="">
                                    </div>

                                    <div class="deskripsi_pengajar">
                                        <p>{{ $acaraUser->events->instructors->name }}</p>
                                        <p>{{ $acaraUser->events->instructors->job }}</p>
                                    </div>
                                </div>

                                {{-- logic kalo misalnya udh rating apa blm :) cemungut jessy --}}
                                <div class="ratingg">
                                    @if (!$acaraUser->events->reviews->where('user_id', Auth::user()->id)->first())
                                        <a href="{{ route('showReview', $acaraUser->events->id) }}">Beri Penilaian</a>
                                    @else
                                        <p>Sudah dinilai</p>
                                    @endif
                                    
                                </div>                                                              
                            </a>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    

    <h1>Acara relawan yang sudah diikuti</h1>

    <div class="acara">
        @foreach($daftarRiwayatAcaraRelawan as $acaraRelawanUser)
                <a href="volunteer/{{ $acaraRelawanUser->volunteer_events->id }}">
                    <div class="c2">
                        <div class="relawan_card">
                            <div class="img_container">
                                <div class="img_kelas">
                                    <img src="{{ asset('assets/fotoVolunteer/'.$acaraRelawanUser->volunteer_events->photo) }}" alt="">
                                </div>
                                
                                @if(Auth::user()->role_id == 2)
                                    <div class="modify_button_container">
                                        <div class="modify_button">
                                            <a href="ubahVolunteer/{{ $acaraRelawanUser->volunteer_events->id }}"><img src="assets/icon/edit.png" alt=""></a>
                                        </div>
                        
                                        <div class="modify_button">
                                            <a href="hapusVolunteer/{{ $acaraRelawanUser->volunteer_events->id }}"><img src="assets/icon/trash.png" alt=""></a>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
            
                            <div class="cardKelas">
                                <a href="volunteer/{{ $acaraRelawanUser->volunteer_events->id }}">
                                    <h3>{{ $acaraRelawanUser->volunteer_events->title }}</h3>
                        
                                    <div class="icon_location">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <h3>{{ $acaraRelawanUser->volunteer_events->location}}</h3>
                                    </div>
                        
                                    <div class="icon_tanggal">
                                        <i class="fa-regular fa-calendar" style="color: white"></i>
                                        <h3>{{ $acaraRelawanUser->volunteer_events->volunteer_event_schedules->date->format('j M Y') }}</h3>

                                        <i class="fa-regular fa-clock" style="color: white"></i>
                                        <h3>{{ substr($acaraRelawanUser->volunteer_events->volunteer_event_schedules->time_start, 0, -3) }} WIB
                                        </h3>
                                    </div>

                                    <div class="icon_link">
                                        <div class="icon_wa">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            <a href="{{ $acaraRelawanUser->volunteer_events->volunteer_event_details->whatsapp_link }}"><p>Link Grup</p></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
    </div>

</body>
</html>
