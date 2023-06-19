<?php $__env->startSection('title'); ?>
    Computer Order Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/order/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
    <style>
        
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper card">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Show Order</h4>
                <a href="<?php echo e(route('order.statusAll')); ?>">
                    <button type="button" class="btn btn-success">Ship All</i></button>
                </a>
                <form action="<?php echo e(route('order.search')); ?>" method="post" class="form_search_date">
                    <?php echo csrf_field(); ?>
                    <div class="justify-content-end d-flex margin_right">
                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                            <input type="date" name="create_date" id="" class="edit_input_date">   
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-rounded btn-fw">Search</button>
                    </div>
                </form>

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Create</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
                                    <td><?php echo e(number_format($order->total)); ?> VND</td>
                                    <?php switch($order->status):
                                        case ("process"): ?>
                                            <td>
                                                <label class="badge badge-warning" style="font-size: 17px;"><?php echo e($order->status); ?></label>
                                            </td>
                                            <?php break; ?>
                                        <?php case ("shipping"): ?>
                                            <td>
                                                <label class="badge badge-info" style="font-size: 17px;"><?php echo e($order->status); ?></label>
                                            </td>
                                            <?php break; ?>
                                        <?php case ("success"): ?>
                                            <td>
                                                <label class="badge badge-success" style="font-size: 17px;"><?php echo e($order->status); ?></label>
                                            </td>
                                            <?php break; ?>
                                        <?php case ("cancel"): ?>
                                            <td>
                                                <label class="badge badge-danger" style="font-size: 17px;"><?php echo e($order->status); ?></label>
                                            </td>
                                            <?php break; ?>
                                        <?php default: ?>
                                            
                                    <?php endswitch; ?>
                                    
                                    <td><?php echo e(formatDateFromUserTable($order->created_at)); ?></td>
                                    <td class="parent">
                                        <a href="<?php echo e(route('order.show', $order->id)); ?>">
                                            <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        <?php echo e($orders->links()); ?>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/backend/components/order/index.blade.php ENDPATH**/ ?>