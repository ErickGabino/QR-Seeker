<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - Buscador QR</title>

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <script type="text/javascript" src="<?php echo e(asset('js.validacionInputs.js')); ?>"></script>

</head>
<body background="IMG/QR4.jpg">

    <?php echo $__env->yieldContent('content'); ?>


    <script type="text/javascript" src="<?php echo e(asset('js.jquery.js')); ?>"></script>
    <script>window.jQuery || document.write('<script src="<?php echo e(asset('js.jquery.js')); ?>"><\/script>')</script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\QR_Code\resources\views/layouts/app2.blade.php ENDPATH**/ ?>