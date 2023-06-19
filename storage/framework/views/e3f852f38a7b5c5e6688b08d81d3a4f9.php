<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer store</title>
    <link rel="stylesheet" href="<?php echo e(asset('assetFE/TestAuth/assets/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetFE/TestAuth/assets/css/style.css')); ?>">
    <style>
        .back_store_wrapper {
            font-size: 18px; font-weight: 400; display: flex; margin-left: 5%;
        }
        .back_store_link {
            text-decoration: none;
        }
        .back_store_icon {
            font-size:  25px; padding: 5px;
        }
    </style>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('assetFE/TestAuth/assets/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetFE/TestAuth/assets/js/main.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/frontend/layouts/auth.blade.php ENDPATH**/ ?>