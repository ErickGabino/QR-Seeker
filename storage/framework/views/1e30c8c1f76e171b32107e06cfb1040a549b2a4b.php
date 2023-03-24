

<?php $__env->startSection('title','Sucursal'); ?>

<?php $__env->startSection('content'); ?>
<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormAdmin.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
    <br>
    <br>
    <br>
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold"><FONT COLOR="black">Registro de Sucursales</FONT></h1>

    <form class="mt-4" method="POST" action="">
        <?php echo csrf_field(); ?>

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre de sucursal"
        id="nombre" name="nombre">

        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección de la sucursal"
        id="direccion" name="direccion">

        <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Página web de la sucursal"
        id="pagina" name="pagina">

        <?php $__errorArgs = ['pagina'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono fijo"
        id="telefono" name="telefono">

        <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>



    </form>
    
</div>


<script src="js/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\QR_Code1\resources\views/auth/sucursal.blade.php ENDPATH**/ ?>