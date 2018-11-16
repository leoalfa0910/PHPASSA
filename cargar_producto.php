<?php include 'header.php'; 

$categorias=['hardware', 'software', 'auriculares', 'teclados', 'motherboards', 'discos', 'memorias' ,'placas de video', 'sillas', 'gabinetes', 'fuentes', 'mouse', 'destacado' , 'impresoras'];
$marcas=['logitech', 'redragon', 'wd', 'kingston', 'gigabyte', 'radeon', 'aerocool', 'asus', 'NZXT', 'evga', 'scandisk', 'samsung', 'intel'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cargar Producto</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form method="POST" action="Controladores/AgregarProducto.php" enctype="multipart/form-data" id="form">
					<div class="form-group mt-4">
						<label for="nombre">Nombre</label>
						<input class="form-control" type="text" name="nombre" id="nombre" autofocus>
					</div>
					<div class="form-group mt-4">
						<label for="nombre">Descripción</label>
						<textarea class="form-control" type="text" name="descripcion" id="descripcion"></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group mt-4">
								<label for="categoria">Categoría</label>
								<select style="height: 200px" class="form-control" name="categorias[]" id="categoria" form="form" multiple>
									<?php 
										foreach($categorias as $categoria) {
											echo "<option value=\"{$categoria}\">" . ucfirst($categoria) . "</option>";
										}
									 ?>
									
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group mt-4">
								<label for="marca">Marca</label>
								<select class="form-control" name="marca" id="marca">
									<option>Seleccionar marca</option>
									<?php 
										foreach($marcas as $marca) {
											echo "<option value=\"{$marca}\">" . ucfirst($marca) . "</option>";
										}
									 ?>
									
								</select>
							</div>
						</div>
					</div>
					

					
					
					<div class="row">

						<div class="col-md-4">
							<div class="form-group mt-4">
								<label for="precio">Precio</label>
								<input class="form-control" type="number" name="precio" id="precio">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mt-4">
								<label for="stock">Stock</label>
								<input class="form-control" type="number" name="stock" id="stock">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mt-4">
								<label for="destacado">Destacado</label><br>
								<input type="checkbox" value="1" id="destacado" name="destacado">
							</div>
						</div>
					</div>
					<div class="form-group mt-4">
						<label for="foto">Foto</label><br>
						<input type="file" name="foto" id="foto">
					</div><br>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				<br><br>
			</div>
		</div>
	</div>
</body>
</html>
<?php include 'footer.php'; ?>