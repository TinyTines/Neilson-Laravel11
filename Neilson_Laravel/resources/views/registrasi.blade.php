<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Toko Bangunan Cahaya Maju</title>
    <style>
        body {
            background-color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 400px;
            border: none;
            box-shadow: none;
        }

        .card-body {
            padding: 40px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 10px;
            text-align: center;
        }

        p.subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 30px;
        }

        label {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 5px;
            display: block;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #000;
            border-radius: 0;
            font-size: 14px;
            background-color: transparent;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 0;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-body">
            <h2>Registrasi</h2>
            <p class="subtitle">Isi Formulir untuk Membuat akun baru</p>

            <form action="{{ route('registrasi.submit') }}" method="post">
                @csrf
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" id="name">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                
                <button type="submit">Buat Akun</button>
            </form>

            <p class="footer-text">Sudah ada akun? <a href="{{ route('hal.login') }}">Login di sini</a></p>
        </div>
    </div>

</body>
</html>
