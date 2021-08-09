
<?php $__env->startSection("content"); ?>
<div class="control-product">
   
   <div class="col-sm-10">
    <div class="trending wrapper">
        <h3 class="pb-2">My Orders</h3>
        
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" row Searched-item cardlist-divider">
            <div class="col-sm-4 ">
                <a href="detail/<?php echo e($item->id); ?>">
                <img class="trending img p-2 ml-5" src="<?php echo e($item->gallery); ?>"  alt="...">
                
                </a>
            </div>
            <div class="col-sm-4">
               
                
                <div class="">
                    <h3>Name: <?php echo e($item->name); ?></h3>
                    <h5>Delivery status:  <?php echo e($item->status); ?></h5>
                    <h5>Address:  <?php echo e($item->address); ?></h5>
                    <h5>Payment status:  <?php echo e($item->payment_status); ?></h5>
                    <h5>Payment method:  <?php echo e($item->payment_method); ?></h5>

                    
            
                </div>
                </a>
            </div>
           
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/myorders.blade.php ENDPATH**/ ?>