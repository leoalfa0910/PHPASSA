<?php
include 'header.php';

foreach($usuarios as $usuario) {
	if ($usuario->id == $_GET['id'] + 0){
		$single = $usuario;
		break;
	}
}
?>

<!-- . profile -->
<section id="profile">
	<br>
	<br>
	<br>
	<div class="container">
	    <div class="card">
			  <div class="card-header">
			  	<div class="row">
				  	<div class="col-md-4 img-container"><img src="img/usuarios/user.png"  width="200"></div>
				  	<div class="col-md-8"><p class="titulo"><span class="nombre"><?php echo $single->nombre; ?></span><span class="separador"> | </span><span class="profile">Profile</span></p>
				  	</div>
				 </div>
			  </div>
		  <div class="card-body">
		  	<div class="row">
		  		<div class="col-md-4 offset-md-4">
		  			<p><span class="profile">Nombre: </span><span class="nombre"><?= $single->nombre ?? ''; ?></span></p>
		  			<p><span class="profile">Apellido: </span><span class="nombre"><?= $single->apellido ?? ''; ?></span></p>
		  			<p><span class="profile">Fecha de nacimiento: </span><span class="nombre"><?= $single->nacimiento ?? ''; ?></span></p>
		  			<p><span class="profile">Dirección: </span><span class="nombre"><?= $single->dirección ?? ''; ?></span></p>
		  		</div>
		  		<div class="col-md-4">
		  			<p><span class="profile">Email: </span><span class="nombre"><?= $single->email; ?></span></p>
		  			<p><span class="profile">Nacionalidad: </span><span class="nombre"><?= $single->nacionalidad ?? ''; ?></span></p>
		  			<p><span class="profile">C.P.: </span><span class="nombre"><?= $single->cp ?? ''; ?></span></p>
		  			<p><span class="profile">Sexo: </span><span class="nombre"><?= $single->sexo ?? ''; ?></span></p>
		  		</div>
		  	</div>
		    <br>
		    <h3 class="text-center">Historial de compras</h3>
			<br>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Compra</th>
			      <th scope="col">Importe</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Auriculares Logitech G533</td>
			      <td>12-03-2018</td>
			      <td>$4899.-</td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Silla AeroCool ac120</td>
			      <td>20-06-2018</td>
			      <td>$12300.-</td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Teclado HyperX Alloy Kingston</td>
			      <td>01-10-2018</td>
			      <td>$4899.-</td>
			    </tr>
			  </tbody>
			</table>
			</div>
		  </div>
		</div>
	</div>
</section>
<!-- fin . profile -->

<?php include 'footer.php' ?>
