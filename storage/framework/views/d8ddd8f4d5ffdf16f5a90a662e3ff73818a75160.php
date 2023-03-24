

<?php $__env->startSection('title','Log In'); ?>

<?php $__env->startSection('content'); ?>

<div class="menu"> <!--div menu-->
    <header>
        <nav>
            <ul>	
                <li><a href="<?php echo e(route('register.index')); ?>"><span class="tercero"><i class="icon icon-suitcase"></i></span>Registrarse</a></li>
            </ul>
        </nav>
    </header>
</div> <!--Cierre div menu-->

<div class="logg"> <!--div logg-->
    
    <h2>Iniciar Sesión</h2>
    <img src="IMG/mono.png" class="user">

    <form method="POST" action="">
        <?php echo csrf_field(); ?>
        <p>Usuario:</p>
        <input type="email" name="email" id="email" placeholder="ejemplo@gmail.com">

        <p>Contraseña:</p>
        <input type="password" name="password" id="password">

        <input type="submit" value="Iniciar Sesión">

        <?php $__errorArgs = ['message'];
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
    </form>
</div> <!--Cierre div logg-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\QR_Code\resources\views/auth/inicio.blade.php ENDPATH**/ ?>