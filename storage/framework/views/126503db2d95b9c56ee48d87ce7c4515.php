<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/styles/main_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetFE/assets/styles/responsive.css')); ?>">">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetFE/assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="fs_menu_overlay"></div>
    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-right">
            <ul class="menu_top_nav">
                <li class="menu_item has-children">
                    <a href="#">
                        usd
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">cad</a></li>
                        <li><a href="#">aud</a></li>
                        <li><a href="#">eur</a></li>
                        <li><a href="#">gbp</a></li>
                        <li><a href="#">vnd</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        English
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">French</a></li>
                        <li><a href="#">Italian</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Spanish</a></li>
                        <li><a href="#">Vietnamese</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        My Account
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="#">home</a></li>
                <li class="menu_item"><a href="#">shop</a></li>
                <li class="menu_item"><a href="#">promotion</a></li>
                <li class="menu_item"><a href="#">pages</a></li>
                <li class="menu_item"><a href="#">blog</a></li>
                <li class="menu_item"><a href="#">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Slider -->

    <?php echo $__env->make('frontend.components.home.slider', ['sliders' => $sliders], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Banner -->

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(<?php echo e(asset('assetFE/assets/images/pc.png')); ?>)">
                        <div class="banner_category">
                            <a href="<?php echo e(route('customer.categoryProductPC')); ?>">PC</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(<?php echo e(asset('assetFE/assets/images/laptop.png')); ?>)">
                        <div class="banner_category">
                            <a href="<?php echo e(route('customer.categoryProductLaptop')); ?>">Laptop</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(<?php echo e(asset('assetFE/assets/images/accesories.jpeg')); ?>)">
                        <div class="banner_category">
                            <a href="<?php echo e(route('customer.categoryProductMonitor')); ?>">Monitor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".product1">LAPTOP</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".product4">KEYBOARD</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".product5">MOUSE</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                        <!-- View Product  -->
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                            <div class="product-item product<?php echo e($product->category_id); ?>">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="<?php echo e(asset($product->feature_image_path)); ?>" alt="<?php echo e($product->feature_image_name); ?>">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a><?php echo e($product->name); ?></a></h6>
                                        <div class="product_price"><?php echo e(number_format($product->promotion_price)); ?> VNĐ
                                            <p style="font-size: 12px; margin-left: 10px; color: #b5aec4; text-decoration: line-through;"><?php echo e(number_format($product->normal_price)); ?> VNĐ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="<?php echo e(route('customer.detail', $product->id)); ?>">Xem chi tiết</a></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/frontend/components/home/index.blade.php ENDPATH**/ ?>