<header>
    <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo"><a href="<?php echo e(Route('home')); ?>"><img src="<?php echo e(asset ('fe/img/logo/logo.png')); ?>" alt=""></a></div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(Route('doglist')); ?>">Dog List</a></li>
                                    <li><a href="<?php echo e(Route('shop')); ?>">Shop</a></li>
                                    <li><a href="<?php echo e(Route('adoption')); ?>">Adoption</a></li>
                                    <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(Route('contact')); ?>">Contacts</a></li>
                                    <!-- My Account -->
                                    <?php if(auth()->check()): ?>
                                    <li class="menu-item-has-children">
                                        <a>
                                            <?php echo e(auth()->user()->name); ?>

                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo e(route('customer.logout')); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                    <?php else: ?>
                                    <li class="menu-item-has-children">
                                        <a>
                                            Account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo e(route('customer.login')); ?>"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Sign In</a></li>
                                            <li><a href="<?php echo e(route('customer.register')); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up</a></li>
                                        </ul>
                                    </li>
                                    <?php endif; ?>
                                    <!-- End My Account -->
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                    <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                    
                                    <li class="header-btn"><a href="adoption.html" class="btn">Adopt Here <img src="<?php echo e(asset ('fe/img/icon/w_pawprint.png')); ?>" alt=""></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-search -->
    <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="search-close">
            <span><i class="fas fa-times"></i></span>
        </div>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">... Search Here ...</h2>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Type keywords here">
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-search-end -->
</header><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/fe/layouts/header.blade.php ENDPATH**/ ?>