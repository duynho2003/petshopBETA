<?php $__env->startSection('title'); ?>
    Computer Setting Edit Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/slider/index.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/js/file-upload.js')); ?>"></script>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace( 'ckeditor1', {
            filebrowserBrowseUrl: "<?php echo e(asset('ckfinder/ckfinder.html')); ?>",
            filebrowserImageBrowseUrl: "<?php echo e(asset('ckfinder/ckfinder.html?type=Images')); ?>",
            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckfinder/ckfinder.html?type=Flash')); ?>",
            filebrowserUploadUrl: "<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')); ?>",
            filebrowserImageUploadUrl: "<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')); ?>",
            filebrowserFlashUploadUrl: "<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')); ?>",
        })
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form class="forms-sample" action="<?php echo e(route('setting.update', $setting->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Setting</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Config Key</label>
                            <input type="text" name="config_key" class="form-control <?php $__errorArgs = ['config_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($setting->config_key); ?>" id="exampleInputName1" placeholder="Enter config key"  autofocus>
                            <?php $__errorArgs = ['config_key'];
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

                        <?php if($setting->type === 'Text'): ?>
                            <div class="form-group">
                                <label>Config Value</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['config_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="config_value" value="<?php echo e($setting->config_value); ?>"  autofocus  placeholder="Enter config value">
                                <?php $__errorArgs = ['config_value'];
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
                        <?php elseif($setting->type === 'Textarea'): ?>
                            <div class="form-group">
                                <label>Config Value</label> 
                                <textarea class="form-control ckeditor <?php $__errorArgs = ['config_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="resize: none;" name="config_value"  autofocus id="ckeditor1" rows="6" placeholder="Enter config value"><?php echo e($setting->config_value); ?></textarea>
                                <?php $__errorArgs = ['config_value'];
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
                        <?php endif; ?>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/setting/edit.blade.php ENDPATH**/ ?>