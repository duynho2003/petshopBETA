<?php $__env->startSection('title'); ?>
    Pet User Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/user/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-wrapper card">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Detail User</h4>

                <div class="form-group float_btn" >
                    <a href="<?php echo e(route('user.edit', $user->id)); ?>">
                        <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>
                    </a>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <td><?php echo e($user->id); ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?php echo e($user->name); ?></td>
                        </tr>
                        <tr>
                            <th>Email </th>
                            <td><?php echo e($user->email); ?></td>
                        </tr>
                        <tr>
                            <th>Avatar</th>
                            <td>
                                <img id="image_user_config" src="<?php echo e(asset(getAvatarCustomerFromUserTable($user->id))); ?>" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><?php echo e($user->phone); ?></td>
                        </tr>
                        <tr>
                            <th>Birthday</th>
                            <td><?php echo e(formatDateFromUserTable($user->birthday)); ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><?php echo e(($user->sex == 1) ? "Male":"Female"); ?></td>
                        </tr>   
                        <tr>
                            <th>Address 1</th>
                            <td><?php echo e($user->address_1); ?></td>
                        </tr> 
                        <tr>
                            <th>Address 2</th>
                            <td><?php echo e($user->address_2); ?></td>
                        </tr> 
                        <tr>
                            <th>Address 3</th>
                            <td><?php echo e($user->address_3); ?></td>
                        </tr>                    
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/user/detail.blade.php ENDPATH**/ ?>