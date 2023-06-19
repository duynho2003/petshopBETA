<header class="header trans_300">

    <!-- Top Navigation -->

    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">free shipping on all u.s orders over $50</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <ul class="top_nav_menu">

                            <!-- Currency / Language / My Account -->

                            <li class="currency">
                                <a href="#">
                                    usd
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="currency_selection">
                                    <li><a href="#">cad</a></li>
                                    <li><a href="#">aud</a></li>
                                    <li><a href="#">eur</a></li>
                                    <li><a href="#">gbp</a></li>
                                    <li><a href="#">vnd</a></li>
                                </ul>
                            </li>
                            <li class="language">
                                <a href="#">
                                    English
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="language_selection">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Vietnamese</a></li>
                                </ul>
                            </li>
                            <?php if(auth()->check()): ?>
                                <li class="account">
                                    <a href="#">
                                        <?php echo e(auth()->user()->name); ?>

                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="account_selection">
                                        <li><a href="<?php echo e(route('customer.logout')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a></li>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="account">
                                    <a href="#">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="account_selection">
                                        <li><a href="<?php echo e(route('customer.login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                                        <li><a href="<?php echo e(route('customer.register')); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="index.html">Computer <span>Store<span></a>
                    </div>

                    
                        
                    
                    <nav class="navbar col-lg-9" style="display: flex;">
                        <ul class="navbar_menu">
                            <li><a href="<?php echo e(route('customer.index')); ?>">home</a></li>
                            <li><a href="<?php echo e(route('customer.product')); ?>">product</a></li>
                            <li><a href="<?php echo e(route('customer.contact')); ?>">contact</a></li>
                        </ul>

                        <ul class="navbar_user" style="display: flex;"> 
                            <li class="nav-item nav-search d-none d-lg-block">
                             
                                <?php switch(Route::currentRouteName()):
                                    case ("customer.infoCart"): ?>
                                        <form action="<?php echo e(route('customer.infoCartSearch')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php case ("customer.product"): ?>
                                        <form action="<?php echo e(route('customer.search')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="type" value="0">
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php case ("customer.categoryProductLaptop"): ?>
                                        <form action="<?php echo e(route('customer.search')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="type" value="1">
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php case ("customer.categoryProductPC"): ?>
                                        <form action="<?php echo e(route('customer.search')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="type" value="2">
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php case ("customer.categoryProductMonitor"): ?>
                                        <form action="<?php echo e(route('customer.search')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="type" value="3">
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php case ("customer.categoryProductKeyboard"): ?>
                                        <form action="<?php echo e(route('customer.search')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="type" value="4">
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php case ("customer.categoryProductMouse"): ?>
                                        <form action="<?php echo e(route('customer.search')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="type" value="5">
                                            <div class="input-group" style="width: 400px;">
                                                <input type="text" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-icon" style="cursor: pointer">
                                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="justify-content: center; ">
                                                        <span class="input-group-text" id="search">
                                                            <i class="fa fa-search" style="color: #fff; font-size: 1.1rem;" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form> 
                                        <?php break; ?>
                                    <?php default: ?> <?php break; ?>
                                <?php endswitch; ?>

                            </li>

                            <?php if(auth()->check()): ?>
                                <li><a href="<?php echo e(route('customer.infoCart', auth()->user()->id)); ?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo e(route('customer.infoCustomer')); ?>"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <?php endif; ?>
                            <li class="checkout">
                                <a href="<?php echo e(route('customer.cart')); ?>">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <?php if(session()->has('cart') != null): ?>
                                        <span id="total_show_quantity" class="checkout_items"><?php echo e(session()->get('cart')->totalQuantity); ?></span>
                                    <?php else: ?>
                                        <span id="total_show_quantity" class="checkout_items">0</span> 
                                    <?php endif; ?>
                                </a>
                            </li>
                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>