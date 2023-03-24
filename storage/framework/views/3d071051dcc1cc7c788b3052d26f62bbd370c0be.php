

<?php $__env->startSection('title','Consulta Productos'); ?>

<?php $__env->startSection('content'); ?>

<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormProd.css">
  <link href="css/emergente.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

<h1 class="text-3xl text-center font-bold mt-5"><FONT COLOR="black">Consulta de Productos</FONT></h1>
<center>
  <div class="wrapper mt-5">
    <tbody class="text-center">

       
      <tr>
          <?php $__currentLoopData = $ConsultaProd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <td>
            
            <div class="card border-dark mb-3" style="width: 18rem;">
              <img src="Productos\IMG\<?php echo e($producto->imagen); ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><?php echo e($producto->nombre); ?> </h5>
                <p class="card-text"><?php echo e($producto->descripcion); ?></p>
                <p class="card-text">Precio: $<?php echo e($producto->precio); ?></p>
                <a href="#" class="btn btn-primary">Añadir al Carrito</a>
              </div>
            </div>
          </td>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tr>

    </tbody>
  </div>
</center>
    <style>

      .wrapper  {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 5px;
    grid-auto-rows: minmax(100px, auto);
  }


</style>

    </body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\QR_Code\resources\views/auth/ConsultaProd.blade.php ENDPATH**/ ?>