<?php $__env->startSection('title'); ?>
    Computer Setting Show Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetBE/assets/setting/index.css')); ?>">
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
                <h4 class="card-title">Show Setting Config Layouts</h4>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle float-btn" id="dropdownMenuIconButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="ti-settings text-primary"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                      <a class="dropdown-item" href="<?php echo e(route('setting.create') . '?type=Text'); ?>">Text</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo e(route('setting.create') . '?type=Textarea'); ?>">Textarea</a>
                    </div>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Config Key</th>
                                <th>Config Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($setting->id); ?></td>
                                    <td><?php echo e($setting->config_key); ?></td>
                                    <td><?php echo e($setting->config_value); ?></td>
                                    <td class="parent">
                                        <a href="<?php echo e(route('setting.edit', $setting->id)); ?>">
                                            <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>
                                        </a>
                                        <a href="" data-url="<?php echo e(route('setting.destroy', $setting->id)); ?>" class="active_delete">
                                            <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        <?php echo e($settings->links()); ?>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/be/components/setting/index.blade.php ENDPATH**/ ?>