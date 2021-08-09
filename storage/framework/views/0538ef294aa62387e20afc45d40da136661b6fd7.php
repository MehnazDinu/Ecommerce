
<?php $__env->startSection("content"); ?>
<div class="control-product">
   
   <div class="col-sm-10">
    <div class="trending wrapper">
        <h3 class="pb-2">Your Cart List</h3>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" row Searched-item cardlist-divider">
            <div class="col-sm-4 ">
                <a href="detail/<?php echo e($item->id); ?>">
                <img class="trending img p-2 ml-5" src="<?php echo e($item->gallery); ?>"  alt="...">
                
                </a>
            </div>
            <div class="col-sm-4">
               
                
                <div class="">
                    <h3 ><?php echo e($item->name); ?></h3>
                    
            
                </div>
                </a>
            </div>
            <div class="col-sm-4">
                 <a href="/removecart/<?php echo e($item->cart_id); ?>"><button class="btn btn-primary">Remove from Cart</button></a>
            </div>
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/cartlist.blade.php ENDPATH**/ ?>