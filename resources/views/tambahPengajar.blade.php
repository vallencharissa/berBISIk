@extends('layout/layout')

@section('title', 'TambahAcara')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tambahPengajar.css')  }}"> 
</body>

@section('content')
<form method="POST" action="pengajar" enctype="multipart/form-data">
    @csrf

    <h1>Tambah Pengajar</h1>

    <div class="card">
        <div class="input">
            <label for="">Nama Pengajar</label>
            <input name="name" type="text" id="name">
        </div>

        <div class="input">
            <label for="">Pekerjaan</label>
            <input name="job" type="text" id="job">
        </div>

        <div class="input">
            <label for="">Deskripsi</label>
            <input name="description" type="text" id="description">
        </div>

        <div class="input">
            <label for="">Foto</label>
            <input name="photo" type="file" id="photo">
        </div>
    
    <button type="submit">Simpan</button>

</form>


@endsection