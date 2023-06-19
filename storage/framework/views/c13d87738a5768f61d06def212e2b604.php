<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="sign-in">
        <div class="container">
            <div style="padding-top: 5%;">
                <?php if(session('message')): ?>
                    <section class='alert alert-success'><?php echo e(session('message')); ?></section>
                <?php endif; ?>
                <?php if(session('error')): ?>
                    <section class='alert alert-success'><?php echo e(session('error')); ?></section>
                <?php endif; ?>
                <?php if(session('alert')): ?>
                    <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
                <?php endif; ?>
                <?php if(session('success')): ?>
                    <section class='alert alert-success'><?php echo e(session('success')); ?></section>
                <?php endif; ?>
            </div>
            <div class="back_store_wrapper" >
                <a href="<?php echo e(route('customer.index')); ?>" class="back_store_link"> Back Store</a><i class="zmdi zmdi-long-arrow-return back_store_icon"></i>
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?php echo e(asset('assetFE/TestAuth/assets/images/signin-image.jpg')); ?>" alt="sing up image"></figure>
                    <a href="<?php echo e(route('customer.register')); ?>" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>
                    <form action="<?php echo e(route('customer.processLogin')); ?>" method="POST" class="register-form" id="login-form">
                        <?php echo csrf_field(); ?>   
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>" class=" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password"  placeholder="Password" class=" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div style="display: flex; justify-content: space-evenly; align-items: baseline;">
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember_me" class="agree-term" />
                                <label for="remember_me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group">
                                <a href="<?php echo e(route('customer.forgotPassword')); ?>" class="signup-image-link" style="font-size: 13px;">Forgot Password ?</a>
                            </div>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>

                    
                    

                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>