<?php $__env->startSection('title'); ?>
    Computer Type Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Show Type</h4>

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($type->id); ?></td>
                                    <td><?php echo e($type->name); ?></td>
                                    <td class="parent">
                                        <a href="<?php echo e(route('type.edit', $type->id)); ?>">
                                            <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>
                                        </a>
                                        <a href="" data-url="<?php echo e(route('type.destroy', $type->id)); ?>" class="active_delete">
                                            <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        <?php echo e($types->links()); ?>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/type/index.blade.php ENDPATH**/ ?>