<?php $__env->startSection('title'); ?>
    Pet Search Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/format_money/simple.money.format.js')); ?>"></script>
    <script>
            $('.price-format').simpleMoneyFormat();
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Show Result</h4>

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Promo price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($products->count()): ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td class="price-format"><?php echo e($product->normal_price); ?></td>
                                        <td class="price-format"><?php echo e($product->promotion_price); ?></td>
                                        <td><?php echo e($product->description); ?></td>
                                        <td>
                                            <img id="image_index_product" src="<?php echo e(asset($product->feature_image_path)); ?>" alt="<?php echo e($product->feature_image_name); ?>">
                                        </td>
                                        <td><?php echo e(optional($product->category)->name); ?></td>
                                        <td class="parent">
                                            <a href="<?php echo e(route('specId.index'). '/?product_id='.$product->id.' &&type_id='.$product->type_id); ?>">
                                                <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                            </a>
                                            <a href="<?php echo e(route('product.edit', $product->id)); ?>">
                                                <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>

                                            </a>
                                            <a href="" data-url="<?php echo e(route('product.destroy', $product->id)); ?>" class="active_delete">
                                                <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            <?php else: ?>
                                <tr>
                                    <td colspan="8">There are no record.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/product/search.blade.php ENDPATH**/ ?>