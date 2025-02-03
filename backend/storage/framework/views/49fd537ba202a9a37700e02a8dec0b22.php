<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel + React + Vite</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.jsx']); ?>
</head>
<body>
<div id="app"></div>
</body>
</html>
<?php /**PATH /mnt/c/Users/sterr/PhpstormProjects/myProject/backend/resources/views/welcome.blade.php ENDPATH**/ ?>