@extends('layout/layout')

@section('title', 'Profil')

<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
<script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
{{-- js --}}
<script src="{{asset('js/profil.js') }}" defer></script>

@section('content')

    {{-- masukkan kode di sini --}}

    <div class="profcard">
        <div class="header">
            Profil Saya
        </div>
        <div class="card">
            <div class="user">
                @if (Auth::user()->photo != null)
                    <img src="{{ asset('assets/fotoUser/' . Auth::user()->photo) }}" alt="" class="foto">
                @else
                    {{-- kasih image sample --}}
                    <img src="" alt="" class="foto">
                @endif

                <div class="data_profil">
                    <div class="profil_container">
                        <h2>{{ Auth::user()->name }}</h2>

                        <div class="icon_profil">
                            <div>
                                <i class="fa fa-phone"></i>
                                <p>{{ Auth::user()->phone }}</p>
                            </div>
                            <div>
                                <i class="fa fa-envelope"></i>
                                <p>{{ Auth::user()->email }}</p>
                            </div>

                        </div>
                    </div>
                    
                    <a href="{{ route('profile.edit') }}">
                        <div class="btn2">Ubah Profil</div>
                    </a>    
                    
                </div>
            </div>
            <div class="btn">Ubah Cover</div>

            {{-- <div class="buttons">
                
                             
            </div>   --}}
        </div>
    </div>

    <div class="event-container">
        <div class="history_acara">
            <div class="judul_history">
                <img class="acara_icon" src="assets/acara/Group 43.png" alt="">
                <h2>Kelas yang terdaftar</h2>
            </div>
            
            <div class="container">
                @foreach ($daftarAcaraUser as $acaraUser)
                    <a href="acara/{{ $acaraUser->events->id }}">
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
    
                                        <div class="progress" data-session-done="{{$acaraUser->session_done}}" data-session="{{$acaraUser->events->event_details->session}}">
                                            <p>Sesi {{ $acaraUser->session_done }}/{{ $acaraUser->events->event_details->session }}</p>
    
                                            <div class="progress_container">
                                                <div class="progress_bar">
                                                    <span class="value-percentage">0%</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @php
                                            $nearestSchedule = null;
                                            $currentDate = \Carbon\Carbon::now();


                                            foreach($acaraUser->events->event_schedules as $schedule){
                                                if($schedule->status_id == 1){
                                                    $nearestSchedule = $schedule;
                                                    break;
                                                }
                                            }
                                        @endphp
                                        
                                        {{-- bukan jadwal terdekat tapi jadwal paling pertama --}}
                                        <div class="icon_tanggal">
                                            <i class="fa-regular fa-calendar" style="color: white"></i>
                                            <h3>
                                                {{ $nearestSchedule->date->format('j M Y') }}
                                                {{-- @if (count($acaraUser->events->event_schedules) > 1)
                                                    -
                                                    {{ $acaraUser->events->event_schedules->last()->date->format('j M Y') }}
                                                @endif --}}
                                            </h3>
    
                                            <i class="fa-regular fa-clock" style="color: white"></i>
                                            <h3>
                                                {{ substr($nearestSchedule->time_start, 0, -3) }}
                                                WIB
                                            </h3>
                                        </div>
    
                                        <div class="icon_link">
                                            <a class="icon_wa_container" href="{{ $acaraUser->events->event_details->whatsapp_link }}">
                                                <div class="icon_wa">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                    <p>Link Grup</p>
                                                </div>
                                            </a>
                                            
                                            <a class="icon_zoom_container" href="{{ $acaraUser->events->event_details->zoom_link }}">
                                                <div class="icon_zoom">
                                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                    <p>Link Zoom</p>
                                                </div>
                                            </a>
                                            
                                        </div>
    
                                        <h3>Sudah terdaftar</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    
        <div class="history_relawan">
            <div class="judul_history">
                <img class="acara_icon" src="assets/acara/Group 63.png" alt="">
                <h2 style="color: #F9EEE1">Acara Relawan yang sudah terdaftar</h2>
            </div>
    
            <div class="container">
                @foreach($daftarAcaraRelawanUser as $acaraRelawanUser)
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
                                            <p>{{ $acaraRelawanUser->volunteer_events->location}}</p>
                                        </div>
                            
                                        <div class="icon_tanggal">
                                            <i class="fa-regular fa-calendar" style="color: white"></i>
                                            <h3>{{ $acaraRelawanUser->volunteer_events->volunteer_event_schedules->date->format('j M Y') }}</h3>
    
                                            <i class="fa-regular fa-clock" style="color: white"></i>
                                            <h3>{{ substr($acaraRelawanUser->volunteer_events->volunteer_event_schedules->time_start, 0, -3) }} WIB
                                            </h3>
                                        </div>
    
                                        <div class="icon_link">
                                            <a class="icon_wa_container" href="{{ $acaraRelawanUser->volunteer_events->volunteer_event_details->whatsapp_link }}">
                                                <div class="icon_wa">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                    <p>Link Grup</p>
                                                </div>
                                            </a>
                                            
                                            <a class="icon_zoom_container" href="{{ $acaraRelawanUser->volunteer_events->volunteer_event_details->zoom_link }}">
                                                <div class="icon_zoom">
                                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                    <p>Link Zoom</p>
                                                </div>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    
        {{-- acara yg udh dilewatin --}}
        <div class="riwayat">
            <div class="judul">
                <div class="judul_history">
                    <img class="acara_icon" src="assets/acara/Group 43.png" alt="">
                    <h2>Riwayat scara-acara yang sudah dilalui</h2>
                </div>
    
                <a href="riwayat/ {{ Auth::user()->id }}">Lihat semua riwayat</a>
            </div>
    
            <div class="container">
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
                                            <a class="icon_wa_container" href="{{ $acaraRelawanUser->volunteer_events->volunteer_event_details->whatsapp_link }}">
                                                <div class="icon_wa">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                    <p>Link Grup</p>
                                                </div>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
    
                @foreach ($daftarRiwayatAcara as $acaraUser)
                    <a href="acara/{{ $acaraUser->events->id }}">
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
    
                                        <div class="rating">
                                            @php
                                                $total = 0;
                                                $jumlahuser = count($acaraUser->events->reviews);
                                                foreach ($acaraUser->events->reviews as $review) {
                                                    $total += $review->rating;
                                                }
                                                $avgrating = $jumlahuser > 0 ? $total / $jumlahuser : 0;
                                            @endphp
                                        
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $avgrating)
                                                    <i class="fa-solid fa-star"></i>
                                                @else
                                                    <i class="fa-regular fa-star"></i>
                                                @endif
                                            @endfor
                                            <span>{{ number_format($avgrating, 1) }}</span>
                                        </div>
                                        
                                        <a class="icon_wa_container" href="{{ $acaraUser->events->event_details->whatsapp_link }}">
                                            <div class="icon_link">
                                                <div class="icon_wa">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                    <p>Link Grup</p>
                                                </div>
                                            </div>
                                        </a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    
        @if(Auth::user()->role_id == 2)
        <div class="loggedin">
            <div class="judulaktif">
                <h2>Pengguna yang Sedang Aktif</h2>
            </div>
            <div class="containerlist">
                <div class="list">
                    @foreach($loggedInUsers->slice(0, ceil($loggedInUsers->count() / 2)) as $loggedInUser)
                        <div class="listnya">
                            {{-- <div class="photo-name"> --}}
                                <img src="{{ $loggedInUser->photo ? asset('assets/fotoUser/' . $loggedInUser->photo) : asset('assets/default-profile.png') }}" class="pp">
                            
                                <div class="namaemailinfo">
                                    <span class="username">{{ $loggedInUser->name }}</span>
                                    <span class="useremail">{{ $loggedInUser->email }}</span>
                                </div>
                            {{-- </div> --}}
                            
                            <div class="status">
                                <span class="indicator {{ $loggedInUser->isActive ? 'active' : 'inactive' }}"></span>
                                <div class="label">{{ $loggedInUser->isActive ? 'Aktif' : 'Tidak Aktif' }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="list">
                    @foreach($loggedInUsers->slice(ceil($loggedInUsers->count() / 2)) as $loggedInUser)
                        <div class="listnya">
                            {{-- <div class="photo-name"> --}}
                                <img src="{{ $loggedInUser->photo ? asset('assets/fotoUser/' . $loggedInUser->photo) : asset('assets/default-profile.png') }}" class="pp">
                                <div class="namaemailinfo">
                                    <span class="username">{{ $loggedInUser->name }}</span>
                                    <span class="useremail">{{ $loggedInUser->email }}</span>
                                </div>
                            {{-- </div> --}}
                            <div class="status">
                                <span class="indicator {{ $loggedInUser->isActive ? 'active' : 'inactive' }}"></span>
                                <div class="label">{{ $loggedInUser->isActive ? 'Aktif' : 'Tidak Aktif' }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
    
@endsection
