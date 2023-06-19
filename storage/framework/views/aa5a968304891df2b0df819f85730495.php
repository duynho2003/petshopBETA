<?php $__env->startSection('title'); ?>
    Computer Product Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/product/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/format_money/simple.money.format.js')); ?>"></script>
    <script>
        $( function() {
            $('.price-format').simpleMoneyFormat();
            $("#slider-range").slider({
                range: true,
                min: <?php echo e($min_price_range); ?>,
                max: <?php echo e($max_price_range); ?>,
                step: 500000,
                values: [ <?php echo e($min_price); ?>, <?php echo e($max_price); ?> ],
                // KHI SLIDER THAY ĐỔI
                slide: function( event, ui ) {
                    
                    $( "#amount_min" ).val(ui.values[ 0 ]).simpleMoneyFormat();
                    $( "#amount_max" ).val(ui.values[ 1 ] ).simpleMoneyFormat();
                    $( "#max_price" ).val(ui.values[ 0 ]);
                    $( "#min_price" ).val(ui.values[ 1 ]);
                }
            });
            // HIỂN THỊ SỰ THAY ĐỔI
            // $( "#amount" ).val( "VNĐ " + $( "#slider-range" ).slider( "values", 0 ) +
            // " - VNĐ " + $( "#slider-range" ).slider( "values", 1 ) ).simpleMoneyFormat();
            $( "#amount_min" ).val($( "#slider-range" ).slider( "values", 0 )).simpleMoneyFormat();
            $( "#amount_max" ).val($( "#slider-range" ).slider( "values", 1 )).simpleMoneyFormat();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Show Product</h4>

                <div class="col-md-4">
                    <label for="">Filter price</label>
                    <form action="<?php echo e(route('product.search')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div id="slider-range"></div>

                        <div style="display: flex; width: 70%; margin: 0 auto;">
                            <b style="width: 56%;">Giá từ:</b>
                            <input type="text" id="amount_min" readonly style="border:0; color:#f6931f; font-weight:bold; width: 100%;">
                            <b style="width: 17%;">-</b>
                            <input type="text" id="amount_max" readonly style="border:0; color:#f6931f; font-weight:bold; width: 100%;">
                        </div>

                        <input type="hidden" name="max_price" id="max_price">
                        <input type="hidden" name="min_price" id="min_price">
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                        </div>
                    </form>
                </div>

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
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td class="price-format"><?php echo e($product->normal_price); ?></td>
                                    <td class="price-format"><?php echo e($product->promotion_price); ?></td>
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
                                    <td><?php echo e($product->description); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/product/index.blade.php ENDPATH**/ ?>