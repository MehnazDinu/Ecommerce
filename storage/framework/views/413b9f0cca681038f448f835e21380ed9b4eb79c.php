
<?php $__env->startSection("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">

            <img class="detail-img" src="<?php echo e($product['gallery']); ?>" alt="" srcset="">

        </div>
        <div class="col-sm-6">
                
            <a href="/">Go back</a>
            <h2><?php echo e($product['name']); ?></h2>
            <h3>Price: <?php echo e($product['price']); ?></h3>
            <h6>Details: <?php echo e($product['discription']); ?><h6>
            <h6>Category: <?php echo e($product['category']); ?></h6>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value=<?php echo e($product['id']); ?>>
                <button class="btn btn-info">Add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>

        </div>


</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/detail.blade.php ENDPATH**/ ?>