<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
    
    <div class="carousel-inner" style="width: 100%; margin-top: 9%; text-align: center" >
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="carousel-item <?php echo e($key == 0 ? "active":""); ?>">
              <img src="<?php echo e(asset($slider->image_path)); ?>" style="width: 80%; margin: 0 auto" alt="...">
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
  </div>
</div>

<?php /**PATH C:\xampp\htdocs\petshopBETA\resources\views/frontend/components/home/slider.blade.php ENDPATH**/ ?>