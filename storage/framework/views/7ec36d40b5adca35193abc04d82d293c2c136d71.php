

<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>

<br><h1 align='center'>¡Bienvenido a QR Seeker!</h1><br>

  <br><br>
  <h1 align='center'>Promociones</h1>
		<!--slider de imagenes-->
		<div class="slider">
		<ul>
			
			<li><img src="http://localhost/QR_Code/public/img/SLIDER/IMG1.png" alt=""></li>
			<li><img src="http://localhost/QR_Code/public/img/SLIDER/IMG3.jpg" alt=""></li>
			<li><img src="http://localhost/QR_Code/public/img/SLIDER/IMG2.jpg" alt=""></li>
			<li><img src="http://localhost/QR_Code/public/img/SLIDER/IMG4.jpg" alt=""></li>

		</ul>
		</div>

		<article>
<br><br><br><div>
		<h1 align='center'>Recomendados</h1>
		
		<!--carrucel-->
		<div class="container">
			<ul id="autoWidth" class="cS-hidden">
		<!--1-->
				<li class="item-a">
					<a href="<?php echo e(route('consultaProd.index')); ?>">
					<div class="box">	
						<p class="marvel">NEUMÁTICOS</p>
						<img src="http://localhost/QR_Code/public/img/Product/Neum2.jpg" class="model">
						<div class="details">
							<p>¡Los mejores neumáticos de la temporada cerca de ti!</p>
						</div>	
					</div>
					</a>
				</li>
		
				<li class="item-a">
					<a href="<?php echo e(route('consultaProd.index')); ?>">
					<div class="box">
						<p class="marvel">FAROS</p>
						<img src="http://localhost/QR_Code/public/img/Product/Faros.jpg" class="model">
						<div class="details">
							<p>¡Repuestos de faros con una calidad increible para tu auto!</p>
						</div>					
					</div>
					</a>
				</li>
		
				<li class="item-a">
					<a href="<?php echo e(route('consultaProd.index')); ?>">	  
					<div class="box">
						<p class="marvel">ESPEJO RETROVISOR</p>		
						<img src="http://localhost/QR_Code/public/img/Product/Retro.jpg" class="model">	
						<div class="details">		
							<p>¡Los mejores espejos de las marcas más reconocidas estan aqui!</p>
						</div>		
					</div>
				</a>
				</li>
	
				<li class="item-a">
					<a href="<?php echo e(route('consultaProd.index')); ?>">
					<div class="box">
						<p class="marvel">LIMPIA PARABRISAS</p>		
						<img src="http://localhost/QR_Code/public/img/Product/Parabri.jpg" class="model">				
						<div class="details">	
							<p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How MaKE him will be ie.</p>
						</div>		
					</div>
					</a>
				</li>
		
				<li class="item-a">
					<a href="<?php echo e(route('consultaProd.index')); ?>">
					<div class="box">
						<p class="marvel">TAPETE</p>
						<img src="http://localhost/QR_Code/public/img/Product/Tapete.jpg" class="model">			
						<div class="details">			
							<p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How MaKE him will be ie.</p>
						</div>
					</div>
					</a>
				</li>
		
				<li class="item-a">
					<a href="<?php echo e(route('consultaProd.index')); ?>">
					<div class="box">
						<p class="marvel">ANTICONGELANTE</p>
						<img src="http://localhost/QR_Code/public/img/Product/Anti.jpg" class="model">
						<div class="details">
							<p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How MaKE him will be ie.</p>
						</div>	
					</div>			
				</li>
			</ul>
		</div>
		<script src="http://localhost/QR_Code/public/js/script.js" type="text/javascript"></script>
		</article>
		</div>
		<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/2fb2e504-141f-4f04-a820-f69a2bc2d287">
</iframe>
	</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\QR_Code1\resources\views/home.blade.php ENDPATH**/ ?>