<?php include 'header.php'; 

$categorias=['hardware', 'software', 'auriculares', 'teclados', 'motherboards', 'discos', 'memorias' ,'placas de video', 'sillas', 'gabinetes', 'fuentes', 'mouse', 'destacado' , 'impresoras'];
$marcas=['logitech', 'redragon', 'wd', 'kingston', 'gigabyte', 'radeon', 'aerocool', 'asus', 'NZXT', 'evga', 'scandisk', 'samsung'];

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
				<form method="POST" action="Controllers/AgregarProducto.php" enctype="multipart/form-data" id="form">
					<div class="form-group mt-4">
						<label for="nombre">Nombre del producto</label>
						<input class="form-control" type="text" name="nombre" id="nombre" autofocus>
					</div>
					<div class="form-group mt-4">
						<label for="nombre">Descripción del producto</label>
						<textarea class="form-control" type="text" name="descripcion" id="descripcion"></textarea>
					</div>
					<div class="form-group mt-4">
						<label for="categoria">Seleccionar Categoría</label>
						<select class="form-control" name="categorias[]" id="categoria" form="form" multiple>
							<option>Seleccionar categoría</option>
							<?php 
								foreach($categorias as $categoria) {
									echo "<option value=\"{$categoria}\">" . ucfirst($categoria) . "</option>";
								}
							 ?>
							
						</select>
					</div>

					<div class="form-group mt-4">
						<label for="marca">Seleccionar Marca</label>
						<select class="form-control" name="marca" id="marca">
							<option>Seleccionar marca</option>
							<?php 
								foreach($marcas as $marca) {
									echo "<option value=\"{$marca}\">" . ucfirst($marca) . "</option>";
								}
							 ?>
							
						</select>
					</div>
					<div class="form-group mt-4">
						<label for="precio">Precio del producto</label>
						<input class="form-control" type="number" name="precio" id="precio">
					</div>
					<div class="form-group mt-4">
						<label for="stock">Stock</label>
						<input class="form-control" type="number" name="stock" id="stock">
					</div>
					<div class="form-group mt-4">
						<label for="foto">Foto del producto</label><br>
						<input type="file" name="foto" id="foto">
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				<br><br>
			</div>
		</div>
	</div>
</body>
</html>
<?php include 'footer.php'; ?>