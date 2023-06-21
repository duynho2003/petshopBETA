<?php $__env->startSection('title'); ?>
Pet Order Detail Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/order/index.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('assetBE/assets/main.js')); ?>"></script>
<script src="<?php echo e(asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content-wrapper" class="content-wrapper card">
    <?php echo $__env->make('be.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Order</h4>

                <div style="text-align: end">
                    <?php if($order->status == "process"): ?>
                    <a href="<?php echo e(route('order.status', $order->id)); ?>">
                        <button type="button" class="btn btn-danger">Hàng đang được chuẩn bị</i></button>
                    </a>

                    <?php elseif($order->status == "shipping"): ?>
                    <a href="" style="display: none">
                        <button type="button" class="btn btn-success">Hàng đang được giao</i></button>
                    </a>
                    <?php endif; ?>
                </div>

                <div style="display: flex">
                    <div class="table-responsive pt-3 col-md-5">
                        <h4>Information Customer</h4>
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Name</th>
                                <td><?php echo e($order->name); ?></td>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <td><?php echo e($order->email); ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?php echo e($order->phone); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($order->address); ?></td>
                            </tr>
                            <tr>
                                <th>Phương thức thanh toán</th>
                                <td><?php echo e($order->payment == 0 ? "Thanh toán bằng ví điện tử":"Thanh toán khi nhận hàng"); ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
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

                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive pt-3 col-md-7">
                        <h4>Information Order</h4>
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $productItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->quantity); ?></td>
                                    <td><?php echo e(number_format($item->promotion_price)); ?> VNĐ</td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <table class="table table-hover table-striped table-bordered margin_top">
                            <tr>
                                <th>Total Quantity</th>
                                <td class="text_align_right"><?php echo e($order->quantity); ?></td>
                            </tr>
                            <tr>
                                <th>Total Price</th>
                                <td class="text_align_right"><?php echo e(number_format($order->total)); ?> VNĐ</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/order/detail.blade.php ENDPATH**/ ?>