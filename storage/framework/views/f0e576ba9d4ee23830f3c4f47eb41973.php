<?php $__env->startSection('title'); ?>
    Computer Menu Edit Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/select2/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/menu/index.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/vendors/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form class="forms-sample" action="<?php echo e(route('menu.update', $menu->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Menu</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Tên menu</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($menu->name); ?>" id="exampleInputName1" placeholder="Enter name menu"  autofocus>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        <?php echo e($message); ?>

                                    </div>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 padding-input-select-2">
                            <div class="form-group">
                                <label>Chọn menu cha</label>
                                <select class="js-example-basic-single w-100" name="parent_id">
                                    <option value="0">Chọn menu cha</option>
                                    <?php echo $optionHtml; ?>

                                </select>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/menu/edit.blade.php ENDPATH**/ ?>