<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .profile {
            width: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <img src="{{ asset('images/ead.png') }}" alt="Logo EAD" class="profile">
    <h1>{{ $salam }}, {{ $nama }}!</h1>
    <p>Waktu Akses: {{ $waktuAkses }} WIB</p>
    <p>Tanggal Hari Ini: {{ $tanggal }}</p>
</body>
</html>
