<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Application E-Commerce développée avec le Framework Laravel 6 par Ludovic Guénet">
    <meta name="author" content="Ludovic Guénet">
    <?php echo $__env->yieldContent('extra-meta'); ?>

    <title>Laravel 6 E-Commerce</title>
    <?php echo $__env->yieldContent('extra-script'); ?>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ecommerce App CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/ecommerce.css')); ?>">
  </head>

  <body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="<?php echo e(route('cart.index')); ?>">Panier <span class="badge badge-pill badge-info text-white"><?php echo e(Cart::count()); ?></span></a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo" style="color: #17a2b8 !important;" href="<?php echo e(route('products.index')); ?>">🛍️ LaraShop</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <?php echo $__env->make('partials.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>
    </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php $__currentLoopData = App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="p-2 text-muted" href="<?php echo e(route('products.index', ['categorie' => $category->slug])); ?>"><?php echo e($category->name); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>
  </div>

  <?php if(session('success')): ?>
      <div class="alert alert-success">
          <?php echo e(session('success')); ?>

      </div>
  <?php endif; ?>

  <?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
  <?php endif; ?>

  <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
        <ul class="mb-0 mt-0">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
  <?php endif; ?>

  <?php if(request()->input('q')): ?>
    <h6><?php echo e($products->total()); ?> résultat(s) pour la recherche "<?php echo e(request()->q); ?>"</h6>
  <?php endif; ?>
  <div class="row mb-2">
  <?php echo $__env->yieldContent('content'); ?>
  </div>
</div>

<footer class="blog-footer">
  <p>
    <a href="https://github.com/ludoguenet/ecommerce-app-laravel-6">Nord Coders</a> - 🛒 Application E-Commerce avec Laravel 6
  </p>
  <p>
    <a href="#">Revenir en haut</a>
  </p>
</footer>

<?php echo $__env->yieldContent('extra-js'); ?>
</body>
</html><?php /**PATH /home/aurelien/Bureau/First_Site/resources/views/layouts/master.blade.php ENDPATH**/ ?>