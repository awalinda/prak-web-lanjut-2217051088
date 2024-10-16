<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @extends('layouts.app')
    @section('content')
    <style>
        body {
            height: 100vh; /* Memastikan body memenuhi tinggi layar */
            display: flex; /* Menggunakan flexbox */
            justify-content: center; /* Memusatkan horizontal */
            align-items: center; /* Memusatkan vertical */
            background-image: url('https://i.pinimg.com/736x/eb/7e/20/eb7e200a0ce488fb6f0f6ba3b93eeb8a.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Comic Sans MS', cursive, sans-serif; 
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            padding: 25px;
            transition: transform 0.3s;
            width: 500px
        }
        .card:hover {
            transform: scale(1.05); 
        }
        .card-title {
            font-weight: bold;
            color: #ff6347; 
        }
        .header {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ff69b4; 
        }
        .footer {
            margin-top: 20px;
            font-size: 1rem;
            color: #ffb6c1;
        }
        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 10%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 5px solid #ff69b4; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); 
            transition: transform 0.3s;
            display: flex;
            justify-content: center;   
            align-items: center;
        }
        .profile-img:hover {
            transform: rotate(10deg); 
        }
        .emoji {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        /* Huruf kecil untuk nama */
        .lowercase {
            text-transform: lowercase;
        }
        /* Tabel rapi */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ff69b4;
            text-align: left;
        }
        th {
            background-color: #ff69b4;
            color: white;
        }
        td {
            background-color: #fff;
        }
        .info {
    background-color: rgba(255, 255, 255, 0.8); /* Latar belakang dengan transparansi */
    border-radius: 15px; /* Sudut membulat */
    padding: 15px; /* Ruang dalam */
    margin: 10px 0; /* Margin atas dan bawah */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan */
    transition: transform 0.3s, box-shadow 0.3s; /* Transisi halus */
}

.info:hover {
    transform: scale(1.02); /* Efek pembesaran saat hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Bayangan lebih dalam saat hover */
}

.label {
    font-weight: bold; /* Teks label tebal */
    color: #ff69b4; /* Warna teks label */
    margin-bottom: 5px; /* Jarak bawah */
}

.value {
    color: #333; /* Warna teks nilai */
}

    </style>
</head>
<body>
<div class="card">
        <img src="../{{ $user->foto }}" alt="Avatar" class="profile-img"><!-- Avatar Deadpool -->
        
        <h1>Profil User</h1>

        <div class="info">
            <p class="label">Nama :{{$user->nama}}</p>
            
        </div>
        <div class="info">
            <p class="label">NPM :{{$user->npm}}</p>
           
        </div>
        <div class="info">
            <p class="label">Kelas : {{$user->nama_kelas ?? 'Kelas Tidak Ditemukan'}}</p>
            
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
