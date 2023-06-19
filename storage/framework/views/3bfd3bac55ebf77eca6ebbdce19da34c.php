<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/styles/bootstrap4/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/animate.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
        
        <?php echo $__env->make('frontend.layouts.benefit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        
        <!-- Footer -->
        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

    </div>

    <script src="<?php echo e(asset('assetFE/assets/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetFE/assets/styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assetFE/assets/styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetFE/assets/plugins/Isotope/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetFE/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assetFE/assets/plugins/easing/easing.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>