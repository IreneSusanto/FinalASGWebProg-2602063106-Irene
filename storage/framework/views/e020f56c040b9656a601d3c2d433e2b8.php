<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <style>
        div{
            border:0px solid black;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <!-- Header -->
            <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Menubar -->
            <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Konten -->
            <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\assignment\resources\views/layouts/master.blade.php ENDPATH**/ ?>