<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuario</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo_registro.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>

<body background="IMG/QR5.jpg">
    <div class="menu"> <!--div menu-->
        <header>
            <nav>
                <ul>	
                    <li><a href="<?php echo e(route('inicio.index')); ?>"><span class="tercero"><i class="icon icon-suitcase"></i></span>Regresar</a></li>
                </ul>
            </nav>
        </header>
    </div> <!--Cierre div menu-->

<br>
<br>
<br>
<br>
    <?php echo $__env->yieldContent('content'); ?><?php /**PATH C:\xampp\htdocs\QR_Code\resources\views/layouts/app3.blade.php ENDPATH**/ ?>