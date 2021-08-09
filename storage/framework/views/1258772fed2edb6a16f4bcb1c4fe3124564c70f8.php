
<?php $__env->startSection("content"); ?>
<div class="control-product">

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

  <div class="carousel-inner">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php echo e($item['id']==17?'active':''); ?>">
    <div class="d-flex h-100 align-items-center justify-content-center">
      <a href="detail/<?php echo e($item['id']); ?>">
      <img class="slider-img" src="<?php echo e($item['gallery']); ?>"  alt="...">
      <div class="carousel-caption slider-text">
        <h5 class="item-name" ><?php echo e($item['name']); ?></h5>
        
      </div>
    
    
    </a>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="visually-hidden">Next</span>
  </button>




</div>
<div class="container">
<div class="trending wrapper">
  <h3 class="">Trending products</h3>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="trending-item">
    <a href="detail/<?php echo e($item['id']); ?>">
      <img class="trending img" src="<?php echo e($item['gallery']); ?>"  alt="...">
      <div class="">
        <h5 ><?php echo e($item['name']); ?></h5>
        
      </div>
    </a>
      </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/product.blade.php ENDPATH**/ ?>