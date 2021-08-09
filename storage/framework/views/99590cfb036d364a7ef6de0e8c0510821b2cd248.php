
<?php $__env->startSection("content"); ?>
<div class="control-product">
   
  <div class="container">

  <table class="table">
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>$<?php echo e($total); ?></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td>$ 0</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td>$ 10</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total Amount</td>
      <td>$ <?php echo e($total + 10); ?></td>
    </tr>
  </tbody>
</table>
    <div>
    <form action="/orderplace" method="post">
    <?php echo csrf_field(); ?>
        <div class="mb-3">
           <textarea name="address" value="cash" placeholder="enter your address" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="payment" class="form-label h3">Payment method</label><br><br>
            <input type="radio" value="cash" name="payment"> <span> Online payment</span><br><br>
            <input type="radio" value="cash" name="payment"> <span> Payment on delivery</span><br><br>

        </div>
        
        <button type="submit" class="btn btn-primary">Order</button>
</form>
    </div>

  </div>
       
</div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/ordernow.blade.php ENDPATH**/ ?>