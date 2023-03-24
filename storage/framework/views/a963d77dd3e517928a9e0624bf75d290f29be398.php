<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>BuscadorQR</title>

    <!-- <link rel="stylesheet" href="http://localhost/QR_Code/public/css/app.css"> -->
	<link rel="stylesheet" href="http://localhost/QR_Code/public/css/estilo_hoteles.css">
	<link rel="stylesheet" href="http://localhost/QR_Code/public/css/estilo_carrucel.css"/>
	<link rel="stylesheet" href="http://localhost/QR_Code/public/css/lightslider.css"/>
	<link rel="stylesheet" href="http://localhost/QR_Code/public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="http://localhost/QR_Code/public/css/BGinicio.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="http://localhost/QR_Code/public/js/jquery.js"></script>
	<script src="http://localhost/QR_Code/public/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="http://localhost/QR_Code/public/js/JQuery3.3.1.js"></script>
	<script type="text/javascript" src="http://localhost/QR_Code/public/js/lightslider.js"></script>

</head>

<body>
<main>
	<div class="content-all">

<!--Comienza la Barra de Navegacion -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;>
	<a class="navbar-brand" href="menu.php"><img src="http://localhost/QR_Code/public/img/QR9.png" width="30" height="30" alt=""> QR Seeker</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">

	<li class="nav-item">
	<a class="nav-link" href="<?php echo e(route('inicio.index')); ?>">Inicio</a>
    </li>

	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	Administradores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="<?php echo e(route('registerAd.index')); ?>" class="dropdown-item">Registrar Administrador</a>
		<div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo e(route('consultaAd.index')); ?>">Ver Administradores</a>
        </div>
    </li>

	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="<?php echo e(route('registerProduc.index')); ?>">Registrar Producto</a>
		<div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo e(route('consultaProd.index')); ?>">Ver Productos</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	Sucursales
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="<?php echo e(route('sucursal.index')); ?>" class="dropdown-item">Registrar Sucursal</a>
		<div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo e(route('consultaSuc.index')); ?>">Ver Sucursales</a>
        </div>
    </li>
    </ul>
        <form class="d-flex flex-row-reverse bd-highlight">

    <button class="btn btn-outline-danger" type="submit"><a href="<?php echo e(route('login.destroy')); ?>" class="text-danger"> Cerrar Sesion</a></button>
    <p >Bienvenido <b><?php echo e(auth()->user()->name); ?>&nbsp &nbsp</b></p>
        </form>
</div>
</nav>

<!--Fin Barra de Navegacion -->

<?php echo $__env->yieldContent('content'); ?>
	
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\QR_Code1\resources\views/layouts/appMenu.blade.php ENDPATH**/ ?>