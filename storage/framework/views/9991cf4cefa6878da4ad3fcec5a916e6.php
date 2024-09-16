<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <title> <?php echo $__env->yieldContent('title'); ?> | Evolve</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Evolve" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('build/images/favicon.webp')); ?>">
    <?php echo $__env->make('user.layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<?php $__env->startSection('body'); ?>
    <body >
<?php echo $__env->yieldSection(); ?>
    <!-- Begin page -->
    <div id="wrapper">
        <header class="header" id="header">
            <?php echo $__env->make('user.layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        
        <?php echo $__env->yieldContent('content'); ?>
                
        <?php echo $__env->make('user.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>     

    <!-- JAVASCRIPT -->
    <?php echo $__env->make('user.layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\xampp\htdocs\evolve.com\resources\views/user/layouts/master.blade.php ENDPATH**/ ?>