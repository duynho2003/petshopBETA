<?php $__env->startSection('title'); ?>
    Computer Category Edit Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/select2/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/category/index.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/vendors/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <form class="forms-sample" action="<?php echo e(route('category.update', $category->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Category</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Tên danh mục</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($category->name); ?>" id="exampleInputName1" placeholder="Enter name menu"  autofocus>
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
                                <label>Chọn danh mục cha</label>
                                <select class="js-example-basic-single w-100" name="parent_id">
                                    <option value="0">Chọn danh mục cha</option>
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
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/category/edit.blade.php ENDPATH**/ ?>