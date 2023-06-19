<?php $__env->startSection('title'); ?>
    Computer Type Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/type/index.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/format_money/simple.money.format.js')); ?>"></script>
    <script>
        $('.price-format').simpleMoneyFormat()
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Show Type</h4>

                <div class="dropdown">
                    <a href="<?php echo e(route('specId.create'). '/?type_id='.request()->type_id.'&&product_id='.request()->product_id); ?>" class="btn btn-primary dropdown-toggle float-btn" id="dropdownMenuIconButton8" >
                      <i class="ti-settings text-primary"></i>
                    </a>
                </div>

                
               
                <div class="table-responsive pt-3">
                    
                            
                        <?php switch($specification):
                            case (1): ?>
                            <?php if(!empty($spec_laptop)): ?>
                                    <?php echo $__env->make('backend.components.typeSpec.specificate.index.spec_index_laptop', ['specLaptop' => $spec_laptop], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php break; ?>
                            <?php endif; ?>
                            <?php case (2): ?>
                            <?php if(!empty($spec_pc)): ?>
                                    <?php echo $__env->make('backend.components.typeSpec.specificate.index.spec_index_pc', ['specPC' => $spec_pc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php break; ?>
                            <?php endif; ?>
                            <?php case (3): ?>
                            <?php if(!empty($spec_monitor)): ?>                               
                                    <?php echo $__env->make('backend.components.typeSpec.specificate.index.spec_index_monitor', ['specMonitor' => $spec_monitor], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php break; ?>
                            <?php endif; ?>
                            <?php case (4): ?>
                            <?php if(!empty($spec_keyboard)): ?>                               
                                    <?php echo $__env->make('backend.components.typeSpec.specificate.index.spec_index_keyboard', ['specKeyBoard' => $spec_keyboard], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php break; ?>
                            <?php endif; ?>
                            <?php case (5): ?>
                            <?php if(!empty($spec_mouse)): ?>                           
                                    <?php echo $__env->make('backend.components.typeSpec.specificate.index.spec_index_mouse', ['specMouse' => $spec_mouse], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php break; ?>
                            <?php endif; ?>
                            <?php default: ?> <?php break; ?>
                        <?php endswitch; ?>
                    
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/typeSpec/index.blade.php ENDPATH**/ ?>