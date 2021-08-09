<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total =ProductController::cartItem();
}

?>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
<a class="nav-link navbar-brand" href="/"><h3 class="pl-5" style="font-style: italic; font-weight:bold;">EyeLike.store</h3> </a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="/myorders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="/cartlist">cart(<?php echo e($total); ?>)</a>
      </li>
      <form action="/search"  class="form-inline my-2 my-lg-0">
      <input class="form-control search-box" name="query" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0"  type="search">Search</button>
    </form>
      <?php if(Session::has('user')): ?>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            <?php echo e(Session::get('user')['name']); ?>

          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            
            
          </ul>
        </li>
        <?php else: ?>
        <a class="p-2" href="/login">Login</a> <br>
        
       <a class="p-2" href="/register">Register</a>
       
       
        <?php endif; ?>
    </ul>
    
  </div>
</nav><?php /**PATH E:\Desktop\Dinu\Laravel\ecommerce\resources\views/header.blade.php ENDPATH**/ ?>