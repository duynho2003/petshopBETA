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
                <h4 class="card-title">Show User</h4>

                <?php if(session('success')): ?>
                    <section class='alert alert-success'><?php echo e(session('success')); ?></section>
                <?php endif; ?>
                <?php if(session('errors')): ?>
                    <section class='alert alert-success'><?php echo e(session('errors')); ?></section>
                <?php endif; ?>

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->phone); ?></td>
                                    <td class="parent">
                                        <a href="<?php echo e(route('user.show', $user->id)); ?>">
                                            <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                        </a>

                                        <?php if($user->status == 0): ?>
                                            <a href="<?php echo e(route('user.status', $user->id)); ?>">
                                                <button type="button" class="btn btn-social-icon btn-success"><i class="ti-unlock"></i></button>
                                            </a>
                                            <?php else: ?>
                                            <a href="<?php echo e(route('user.status', $user->id)); ?>">
                                                <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-lock"></i></button>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <a href="" data-url="<?php echo e(route('user.destroy', $user->id)); ?>" class="active_delete">
                                            <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/user/index.blade.php ENDPATH**/ ?>