<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        .logout-btn {
            background: #ff4444;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background: #cc0000;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->kategori); ?></td>
                <td>Rp <?php echo e(number_format($item->harga, 0, ',', '.')); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</body>
</html><?php /**PATH D:\laragon\www\laravel(ORI)\laravel11\resources\views/produk/index.blade.php ENDPATH**/ ?>