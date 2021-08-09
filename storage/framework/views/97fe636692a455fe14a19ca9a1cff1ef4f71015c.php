
<?php $__env->startSection("content"); ?>
<div class="control-product">
   <div class="col-sm-4">
       <a href="#">Filter</a>
   </div>
   <div class="col-sm-4 item-left">
    <div class="trending wrapper">
        <h3 class="">Searched products</h3>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="Searched-item">
        <a href="detail/<?php echo e($item['id']); ?>">
        <img class="trending img" src="<?php echo e($item['gallery']); ?>"  alt="...">
        <div class="">
            <h2 ><?php echo e($item['name']); ?></h5>
            <h5 ><?php echo e($item['discription']); ?></h5>
            
        </div>
        </a>
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/search.blade.php ENDPATH**/ ?>