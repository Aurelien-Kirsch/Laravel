<?php $__env->startSection('content'); ?>
  <div class="col-md-12">
    <div class="row no-gutters p-3 border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
      <div class="col p-3 d-flex flex-column position-static">
        <muted class="d-inline-block mb-2 text-info">
          <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($category->name); ?><?php echo e($loop->last ? '' : ', '); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </muted>
        <h3 class="mb-4"><?php echo e($product->title); ?></h3>
        <span><?php echo $product->description; ?></span>
        <strong class="mb-4 display-4 text-secondary"><?php echo e($product->getPrice()); ?></strong>
        <form action="<?php echo e(route('cart.store')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
          <button type="submit" class="btn btn-success mb-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ajouter au panier</button>
        </form>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aurelien/Bureau/First_Site/resources/views/products/show.blade.php ENDPATH**/ ?>