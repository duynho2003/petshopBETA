<?php $__env->startSection('title'); ?>
    Computer Type Create Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form class="forms-sample" action="<?php echo e(route('type.update', $type->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Type</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Name Type</label>
                            <input type="text" name="name" class="form-control" value="<?php echo e($type->name); ?>" id="exampleInputName1" placeholder="Name " required  autofocus>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/type/edit.blade.php ENDPATH**/ ?>