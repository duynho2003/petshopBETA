<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Slider</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="slider">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('slider.index')); ?>">Show List Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('slider.create')); ?>">Create Slider</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('setting.index')); ?>">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Setting</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu" aria-expanded="false" aria-controls="menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Menu</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('menu.index')); ?>">Show List Menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('menu.create')); ?>">Create Menu</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('category.index')); ?>">Show List Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('category.create')); ?>">Create Category</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('product.index')); ?>">Show List Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('product.create')); ?>">Create Product</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#type" aria-expanded="false" aria-controls="type">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Type</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="type">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('type.index')); ?>">Show List Type</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('type.create')); ?>">Create Type</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">User</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('order.index')); ?>">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Order</span>
            </a>
        </li>

    </ul>
</nav><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>