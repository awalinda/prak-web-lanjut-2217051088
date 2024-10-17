<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    @extends('layouts.app')
    @section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/736x/eb/7e/20/eb7e200a0ce488fb6f0f6ba3b93eeb8a.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Transparent white background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Slightly stronger shadow */
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #B8001F;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #B8001F;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit User Information</h2>
        <form action="{{ route('user.update',$user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Tambahkan metode PUT untuk update -->
            
            <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value = "{{ old('nama', $user->nama) }}">
        @foreach($errors->get('nama') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach
        <label for="npm">NPM :</label>
        <input type="text" id="npm" name="npm" value = "{{ old('nama', $user->npm) }}">
        @foreach($errors->get('npm') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach
        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"
             {{ $kelasItem-> id == $user->kelas_id ? 'selected' : '' }}>
             {{ $kelasItem-> nama_kelas}}
            </option>
                @endforeach
            </select>
            <br> </br>

        <label for="foto">Foto : </label>
        <input type="file" id="foto" name="foto"><br><br>
        @if($user->foto)
        <img src="{{ asset('storage/uploads/' . $user->foto) }}" class="card-img-top" alt="">
        @endif
        <br>
        <button type="submit">Submit</button><br>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection

</body>
</html>
