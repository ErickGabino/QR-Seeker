

<?php $__env->startSection('title','Consulta Administradores'); ?>

<?php $__env->startSection('content'); ?>

<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormSucu.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
   

<h1 class="text-3xl text-center font-bold mt-5"><FONT COLOR="black">Consulta de Administrador</FONT></h1>


<center>
<div class="container mt-5">
<table class="table table-striped table-bordered table-dark">

<thead class="text-center">
      <tr>
        <td>ID </td>
        <td>Nombre </td>
        <td>Apellido Paterno </td>
        <td>Apellido Materno </td>
        <td>Telefono </td>
        <td>Correo </td>
        <td>Administrador </td>

      </tr>
    </thead>
    <tbody class="text-center">
    <?php $__currentLoopData = $ConsultaAd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Administrador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
       
        <td><?php echo e($Administrador->id); ?></td>
        <td><?php echo e($Administrador->name); ?></td>
        <td><?php echo e($Administrador->nameap); ?></td>
        <td><?php echo e($Administrador->nameam); ?></td>
        <td><?php echo e($Administrador->telefono); ?></td>
        <td><?php echo e($Administrador->email); ?></td>
        <td><?php echo e($Administrador->txtAdmin); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
    </tbody>
</table>

</center>
    </div>
    


</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\QR_Code\resources\views/auth/ConsultaAd.blade.php ENDPATH**/ ?>