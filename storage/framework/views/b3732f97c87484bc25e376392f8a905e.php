<?php $__env->startSection('title'); ?>
    Pet Type Create Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form class="forms-sample" action="<?php echo e(route('type.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Type</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Name Type</label>
                            <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>" id="exampleInputName1" placeholder="Name" required  autofocus>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/type/create.blade.php ENDPATH**/ ?>