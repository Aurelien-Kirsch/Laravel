<?php $__env->startSection('content'); ?>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <small class="d-inline-block text-info mb-2">
            <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($category->name); ?><?php echo e($loop->last ? '' : ', '); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </small>
          <h5 class="mb-0"><?php echo e($product->title); ?></h5>
          <p class="mb-3 text-muted"><?php echo e($product->subtitle); ?></p>
          <strong class="display-4 mb-4 text-secondary"><?php echo e($product->getPrice()); ?></strong>
          <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="stretched-link btn btn-info"><i class="fa fa-location-arrow" aria-hidden="true"></i> Consulter le produit</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($products->appends(request()->input())->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aurelien/Bureau/First_Site/resources/views/products/index.blade.php ENDPATH**/ ?>