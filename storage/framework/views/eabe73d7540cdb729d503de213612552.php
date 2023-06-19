<?php $__env->startSection('title'); ?>
    Computer Product Create Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/select2/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/product/index.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/vendors/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/select2.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/js/file-upload.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/format_money/simple.money.format.js')); ?>"></script>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace( 'ckeditor1', {
            filebrowserBrowseUrl: "<?php echo e(asset('ckfinder/ckfinder.html')); ?>",
            filebrowserImageBrowseUrl: "<?php echo e(asset('ckfinder/ckfinder.html?type=Images')); ?>",
            filebrowserFlashBrowseUrl: "<?php echo e(asset('ckfinder/ckfinder.html?type=Flash')); ?>",
            filebrowserUploadUrl: "<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')); ?>",
            filebrowserImageUploadUrl: "<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')); ?>",
            filebrowserFlashUploadUrl: "<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')); ?>",
        });
        $('.price-format').simpleMoneyFormat()
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <form class="forms-sample" action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Product</h4>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" placeholder="Name"  autofocus>
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

                        <div class="form-group">
                            <label>Normal Price</label>
                            <input type="text" name="normal_price" class="form-control price-format <?php $__errorArgs = ['normal_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('normal_price')); ?>" placeholder="Normal price"  autofocus>
                            <?php $__errorArgs = ['normal_price'];
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

                        <div class="form-group">
                            <label>Promotion Price</label>
                            <input type="text" name="promotion_price" class="form-control price-format <?php $__errorArgs = ['promotion_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('promotion_price')); ?>" placeholder="Promotion price"  autofocus>
                            <?php $__errorArgs = ['promotion_price'];
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

                        <div class="select_padding_col col-md-4">
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="feature_image_path" class="file-upload-default <?php $__errorArgs = ['feature_image_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" >
                                    <span class="input-group-append">
                                        <button type="button" class="file-upload-browse btn btn-primary btn-icon-text">
                                            <i class="ti-upload btn-icon-prepend font_size_icon"></i>                                                    
                                            Upload
                                        </button>
                                    </span>
                                </div>
                                <?php $__errorArgs = ['feature_image_path'];
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
                        </div>

                        <div class="select_padding_col col-md-4">
                            <div class="form-group">
                                <label>Multi file upload</label>
                                <input type="file" name="image_path[]" multiple class="file-upload-default <?php $__errorArgs = ['image_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Multi Image" >
                                    <span class="input-group-append">
                                        <button type="button" class="file-upload-browse btn btn-primary btn-icon-text">
                                            <i class="ti-upload btn-icon-prepend font_size_icon"></i>                                                    
                                            Upload
                                        </button>
                                    </span>
                                </div>
                                <div class="filenames">
                                    <img src="" alt="">
                                </div>
                                <?php $__errorArgs = ['image_path'];
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
                        </div>

                        <div class="col-md-6 padding-input-select-2">
                            <div class="form-group">
                                <label>Chọn danh mục cha</label>
                                <select class="js-example-basic-single w-100" name="category_id">
                                    <option value="0">Chọn danh mục cha</option>
                                    <?php echo $optionHtml; ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ckeditor" style="resize: none;" name="description"  autofocus id="ckeditor1" rows="6" placeholder="Description"><?php echo e(old('description')); ?></textarea>
                            <?php $__errorArgs = ['description'];
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


                        <div class="form-group">
                            <label for="">Type</label>
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" <?php $__errorArgs = ['type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="type_id" id="optionsRadios1" value="<?php echo e($type->id); ?>">
                                        <?php echo e($type->name); ?>

                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__errorArgs = ['type_id'];
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

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/product/create.blade.php ENDPATH**/ ?>