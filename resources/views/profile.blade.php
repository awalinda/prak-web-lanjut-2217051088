<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/eb/7e/20/eb7e200a0ce488fb6f0f6ba3b93eeb8a.jpg'); /* Ganti dengan URL gambar latar belakang lucu */
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
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 5px solid #ff69b4; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); 
            transition: transform 0.3s;
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="header">✨ Profil Mahasiswa✨</h2>
                        
                        <!-- Foto Profil -->
                        <img src="https://i.pinimg.com/564x/5b/f8/ba/5bf8bad784c493c8c109216e1afd8d8c.jpg" alt="Foto Profil" class="profile-img"> <!-- Ganti dengan URL gambar profil lucu -->
                        
                        <!-- Tabel Profil -->
                        <table>
                            <tr>
                                <th>Nama</th>
                                <td class="lowercase">Awalinda Pangestuti</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>D</td>
                            </tr>
                            <tr>
                                <th>NPM</th>
                                <td>2217051088</td>
                            </tr>
                        </table>
                    </div>
                    <div class="footer">
                        <p>&copy; halo ayinn🌟</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
