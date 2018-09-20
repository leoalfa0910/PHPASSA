<?php 
	include 'header.php';
	include 'arr_productos.php'
 ?>
 <!-- . productos -->
 <section id="productos">
    <div class="container">
	 		<div class="row">
	 		<?php
	 		foreach($productos as $producto) { ?>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="card my-4">
						<img class="card-img-top" src="<?php echo $producto['img_chica'] ?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title"><?php echo $producto['nombre'] ?></h5>
							<p class="card-text"><?php echo $producto['descr_corta'] ?></p>
							<h6>$<?php echo $producto['precio'] ?></h6>
							<a href="#" class="btn btn-primary">Comprar</a>
						</div>
					</div>
				</div>

	 		<?php } ?> 
	 		</div>
	 </div> 
 </section>
 <!-- fin . productos -->
 
 <?php 
	include 'footer.php';
?>