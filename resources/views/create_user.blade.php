<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details</title>
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
        <h2>Student Information</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda">

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda">

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas Anda">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>