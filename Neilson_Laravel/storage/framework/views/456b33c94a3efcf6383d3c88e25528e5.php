<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="/login">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <?php if($errors->any()): ?>
            <div style="color: red;">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>
    </form>
</body>
</html>
<?php /**PATH D:\laragon\www\laravel(ORI)\laravel11\resources\views/auth/login.blade.php ENDPATH**/ ?>