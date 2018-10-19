<?php
include('header.php');
// echo '<pre>';
// var_dump($productos);die;
// echo '</pre>';
foreach($productos as $producto) {
	if ($producto->id == $_GET['id'] + 0){
		$single = $producto;
		break;
	}
}
?>
<section id="single">
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="single-col col-12 col-lg-5">
				<img src="<?php echo $single->foto ?>" alt="">
			</div>
			<div class="single-col col12 col-lg-7">
				<br>
				<h3><?php echo $single->nombre ?></h3>
				<h4>$<?php echo $single->precio ?>.-</h4>
				<small>Cod. de artículo: <?php echo $single->id ?></small>
				<br>
				<?php
				$categorias = json_decode($producto->categoria, true);

				foreach( $categorias as $categoria ) {
					$categoria = strtoupper( $categoria );
					 if( $categoria != 'DESTACADO' ) {
					 	echo "<a class=\"badge badge-secondary\" style=\"margin: 5px 5px 5px 0;\" href=\"#\">{$categoria}</a>";
					}
				}
				?>
				<br>
				<h6>Descripción</h6>
				<p><?php echo $single->descripcion ?></p>
			</div>
		</div>
	</div>
</section>
<?php
include('footer.php');
?>
