<?php $__env->startSection('title'); ?>
    Computer Type Create Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <form class="forms-sample" action="<?php echo e(route('specId.store'). '/?type_id='.request()->type_id.'&&product_id='.request()->product_id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php switch(request()->type_id):
                            case (1): ?>
                                <?php echo $__env->make('backend.components.typeSpec.specificate.create.spec_create_laptop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case (2): ?>
                                <?php echo $__env->make('backend.components.typeSpec.specificate.create.spec_create_pc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case (3): ?>
                                <?php echo $__env->make('backend.components.typeSpec.specificate.create.spec_create_monitor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case (4): ?>
                                <?php echo $__env->make('backend.components.typeSpec.specificate.create.spec_create_keyboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php case (5): ?>
                                <?php echo $__env->make('backend.components.typeSpec.specificate.create.spec_create_mouse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php break; ?>
                            <?php default: ?>
                                <?php break; ?>
                        <?php endswitch; ?>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/typeSpec/create.blade.php ENDPATH**/ ?>