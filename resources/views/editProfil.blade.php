@extends('layout/layout')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/editProfile.css')  }}">
</body>

@section('content')
<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h1>Ubah Profil</h1>

    <div class="card">
        <div class="input">
            <label for="name">Nama</label>
            <input name="name" type="text" id="name" value="{{ $user->name }}" required>
        </div>

        <div class="input">
            <label for="phone">Nomor Telepon</label>
            <input name="phone" type="text" id="phone" value="{{ $user->phone }}" required>
        </div>

        <div class="input">
            <label for="email">Email</label>
            <input name="email" type="email" id="email" value="{{ $user->email }}" required>
        </div>

        <div class="input">
            <label for="password">Kata Sandi</label>
            <input name="password" type="password" id="password">
        </div>

        <div class="input">
            <label for="confirmpass">Konfirmasi Kata Sandi</label>
            <input name="confirmpass" type="password" id="confirmpass">
        </div>

        <div class="input">
            <label for="photo">Foto Profil</label>
            <input name="photo" type="file" id="photo">
            @if ($user->photo)
                <p>Foto sebelumnya: </p>
                <img src="{{ asset('assets/fotoUser/' . $user->photo) }}">
            @endif
        </div>
    </div>

    <button type="submit">Ubah Profil</button>
</form>
@endsection