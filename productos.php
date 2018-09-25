<?php
	include 'header.php';
	include 'arr_productos.php'
 ?>
 <!-- . productos -->
 <section id="productos">
    <div class="container">
    	<h2 class="my-5">Productos</h2>
	 		<div class="row">
	 		<?php
	 		foreach($productos as $producto) { ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="card my-3">
						<a href="<?php echo APP_URL . 'producto.php?id_producto=' . $producto['id_producto'] ?>"><img class="card-img-top" src="<?php echo $producto['img_chica'] ?>" alt="Card image cap"></a>
						<div class="card-body">
							<a href="<?php echo APP_URL . 'producto.php?id_producto=' . $producto['id_producto'] ?>"><h4 class="card-title"><?php echo $producto['nombre'] ?></h4></a>
							<p class="card-text"><?php echo $producto['descr_corta'] ?></p>
							<h5>$<?php echo $producto['precio'] ?>.-</h5>
							<a href="#" class="btn">Comprar</a>
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
