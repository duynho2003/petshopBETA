<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/feather/feather.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/datatables.net-bs4/dataTables.bootstrap4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetBE/js/select.dataTables.min.css')); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/css/vertical-layout-light/style.css')); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(asset('assetBE/images/favicon.png')); ?>" />
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <div class="container-scroller">

        <?php echo $__env->make('backend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid page-body-wrapper">

            <?php echo $__env->make('backend.layouts.setting_theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('backend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="main-panel">
                <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>   
    </div>

    <!-- plugins:js -->
    <script src="<?php echo e(asset('assetBE/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('assetBE/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/vendors/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/dataTables.select.min.js')); ?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('assetBE/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/todolist.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo e(asset('assetBE/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/Chart.roundedBarCharts.js')); ?>"></script>
    <!-- End custom js for this page-->
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>

<?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/layouts/master.blade.php ENDPATH**/ ?>