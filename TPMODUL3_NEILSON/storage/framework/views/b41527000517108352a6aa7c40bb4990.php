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
    <img src="<?php echo e(asset('images/ead.png')); ?>" alt="Logo EAD" class="profile">
    <h1><?php echo e($salam); ?>, <?php echo e($nama); ?>!</h1>
    <p>Waktu Akses: <?php echo e($waktuAkses); ?> WIB</p>
    <p>Tanggal Hari Ini: <?php echo e($tanggal); ?></p>
</body>
</html>
<?php /**PATH D:\laragon\www\laravel11\resources\views/dashboard.blade.php ENDPATH**/ ?>