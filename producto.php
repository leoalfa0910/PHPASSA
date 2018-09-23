<?php 
include('header.php');
foreach($productos as $producto) {
	if ($producto['id_producto'] === $_GET['id_producto'] + 0){
		$single = $producto;
		break;
	}
}
?>
<section id="single">
	<div class="container">
		<div class="row">
			<div class="col12 col-lg-5">
				<img src="<?php echo $single['img_full'] ?>" alt="">
			</div>
			<div class="col12 col-lg-7">
				<br><br>
				<h3><?php echo $single['nombre'] ?></h3>
				<h4>$<?php echo $single['precio'] ?>.-</h4>
				<small>Cod. de artículo: <?php echo $single['id_producto'] ?></small>
				<br>
				<br>
				<br>
				<h6>Descripción</h6>
				<p><?php echo $single['descripcion'] ?></p>
			</div>
		</div>
	</div>
</section>
<?php
include('footer.php');
?>