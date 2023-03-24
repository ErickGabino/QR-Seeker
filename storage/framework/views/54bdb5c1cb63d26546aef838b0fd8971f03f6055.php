

<?php $__env->startSection('title','Consulta Productos'); ?>

<?php $__env->startSection('content'); ?>

<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormProd.css">
  <link href="css/emergente.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
<h1 class="text-3xl text-center font-bold mt-5">
    <FONT COLOR="black">Consulta de Productos</FONT>
  </h1>
  <center>
    <div class="wrapper mt-5">
      <tbody class="text-center">


        <tr>
          <?php $__currentLoopData = $ConsultaProd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <td>

            <center>
              <div class="card border-dark mb-10" style="width: 18rem;">

                <img src="Productos\IMG\<?php echo e($producto->Imagen); ?>" class="card-img-top" alt="">
                <img src="QRP\IMG\<?php echo e($producto->qr); ?>" class="card-img-top" alt="">
           
                <div>
                  <FONT COLOR="black">★ </FONT>
                  <FONT COLOR="black">★ </FONT>
                  <FONT COLOR="black">★ </FONT>
                  <FONT COLOR="black">★ </FONT>
                  <FONT COLOR="black">★ </FONT>

                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($producto->nombre); ?> </h5>
                    <p class="card-text"><?php echo e($producto->descripcion); ?></p>
                    <p class="card-text">Precio: $<?php echo e($producto->precio); ?></p>
                    <!-- a partir de aqui le movi -->

                    <!-- <input type="number" name="cantidad" id="cantidad" placeholder="cantidad"> -->
                    <hr>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#comprarProducto<?php echo e($producto->id); ?>">Comprar</button>
                 
                    <hr>

                  </div>
                  <div class="modal fade bd-example-modal-lg" id="comprarProducto<?php echo e($producto->id); ?>" tabindex="-1" role="dialog">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Total a pagar.</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- <p>Bienvenido <b><?php echo e(auth()->user()->name); ?>&nbsp &nbsp</b></p> -->
                          <p><?php echo e($producto->nombre); ?></p>
                          <!-- <input type="text" id="nombre" name="nombre" values="<?php echo e($producto->nombre); ?>"><br> -->
                          <img src="Productos\IMG\<?php echo e($producto->Imagen); ?>" width="200px" height="200px"><br></p>
                         
                          
                          
                          
                        
                          <p id="pp">Precio $<?php echo e($producto->precio); ?></p>
                          <hr>
                          <p style="color: rgb(255,15,36);">Pagar: <?php echo e($producto->precio); ?></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#pagado<?php echo e($producto->id); ?>">Pagar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- pagado -->
                  <div class="modal fade bd-example-modal-lg" id="pagado<?php echo e($producto->id); ?>" tabindex="-1" role="dialog">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Pagado.</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Comprado por: <b><?php echo e(auth()->user()->name); ?>&nbsp &nbsp</b></p>
                
                          <p><?php echo e($producto->nombre); ?></p>
                          <!-- <input type="text" id="nombre" name="nombre" values="<?php echo e($producto->nombre); ?>"><br> -->
                          <img src="Productos\IMG\<?php echo e($producto->Imagen); ?>" width="200px" height="200px"><br>
                          <p id="pp">Recoger en tienda</p>
                          <hr>
                          <p style="color: green;">Pagado: <?php echo e($producto->precio); ?></p>

                        </div>
                        <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-light" data-toggle="modal" data-target="#pagado<?php echo e($producto->id); ?>">Pagar</button> -->
                          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Factura<?php echo e($producto->id); ?>">Factura</button>
                         
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                      <!-- Factura -->
                  <div class="modal fade bd-example-modal-lg" id="Factura<?php echo e($producto->id); ?>" tabindex="-1" role="dialog">

                    <div class="modal-dialog  modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Factura</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <div style="float:left">Lugar de expedicion:Mexico</div>
                        <div style="float:right" href="menu.php"><img src="http://localhost/QR_Code/public/img/QR9.png" width="60" height="60" alt=""> QR Seeker</a></div><br>
                        <div style="float:left">fecha y hora de emision:18/22/2022</div><br></p>
                         <div style="float:left"><b>Cliente</b></div><br>
                         <div style="float:left">Num.Cliente:<?php echo e(auth()->user()->id); ?>&nbsp &nbsp</div><br>
                         <div style="float:left">Nombre:<?php echo e(auth()->user()->name); ?>&nbsp &nbsp</div><br>
                         <div style="float:left">Email:<?php echo e(auth()->user()->email); ?>&nbsp &nbsp</div><br>
      
                      
                          <hr>
                          <div style="float:left"><b>Nom</b></div>
                          <div style="float:right"><b>Precio</b></div><br>
                          <div style="float:left"><?php echo e($producto->nombre); ?>&nbsp &nbsp</div>
                          <div style="float:left"> <img src="Productos\IMG\<?php echo e($producto->Imagen); ?>" width="50px" height="50px"></div><br>
                          <div style="float:left"> <img src="QRP\IMG\<?php echo e($producto->qr); ?>" width="50px" height="50px"></div><br>
                          <div style="float:right"><?php echo e($producto->precio); ?>&nbsp &nbsp</div><br></p>
                          <hr>
                          <div style="float:left"><b>Descripcion</b></div><br></p>
                          <div style="float:left"><?php echo e($producto->descripcion); ?>&nbsp &nbsp</div><br></p>
                        
                          <div style="float:left"><b>Categoria</b></div>
                          <!-- <input type="text" id="nombre" name="nombre" values="<?php echo e($producto->nombre); ?>"><br> -->

                        
                      
                        
                       

                        </div>
                        <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-light" data-toggle="modal" data-target="#pagado<?php echo e($producto->id); ?>">Pagar</button> -->
                          <button type="button" class="btn btn-danger" data-dismiss="Factura"><a href="<?php echo e(route('print','$producto->id')); ?>">Imprimir Factura</a></button>
                

                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </center>
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
    grid-gap: 10px;
    grid-auto-rows: minmax(100px, auto);
  }


</style>

    </body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\QR_Code1\resources\views/auth/ConsultaProd.blade.php ENDPATH**/ ?>