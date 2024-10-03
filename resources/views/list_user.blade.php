@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('https://i.pinimg.com/564x/85/50/5c/85505cc6a167d54d889f5053cc524410.jpg');
        background-size: cover; 
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh; /* Pastikan tinggi halaman penuh */
        margin: 0;
        display: flex;
        justify-content: center; /* Menempatkan konten di tengah secara horizontal */
        align-items: center;    /* Menempatkan konten di tengah secara vertikal */
    }

    .container {
        background-color: rgba(255, 255, 255, 0.8); /* Memberikan sedikit transparansi pada background kontainer */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan shadow untuk efek */
        max-width: 80%; /* Membatasi lebar kontainer */
    }

    table th, table td {
        text-align: center;
        vertical-align: middle;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
</style>

<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    <a href="/edit/{{ $user['id'] }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/delete/{{ $user['id'] }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
