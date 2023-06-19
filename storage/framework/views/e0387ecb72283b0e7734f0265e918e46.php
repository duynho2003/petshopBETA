<?php $__env->startSection('title'); ?>
    Setting Infor Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/js/file-upload.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('alert')): ?>
        <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
    <?php endif; ?>
    <div class="content-wrapper card">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="<?php echo e(route('admin.postSetting')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            
                            <h4 class="card-title">Change Password</h4>
                            <div class="form-group">
                                <label for="exampleInputName1">Current Password</label>
                                <input type="password" name="current_password" class="form-control"  placeholder="Current Password">
                                <p style="font-size: 16px; color: red; padding: 16px;">
                                    <?php echo session()->get('errors'); ?>

                                </p>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputName1">New Password</label>
                                <input type="password" name="new_password" class="form-control"  placeholder="New Password">
                                <p style="font-size: 16px; color: red; padding: 16px;">
                                    <?php echo session()->get('errors_new_password'); ?>

                                </p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control"  placeholder="Confirm Password">
                                <p style="font-size: 16px; color: red; padding: 16px;">
                                    <?php echo session()->get('errors_confirm_password'); ?>

                                </p>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/auth/setting_info.blade.php ENDPATH**/ ?>