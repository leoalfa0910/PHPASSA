<?php 

include 'header.php';

$errorEmail = false;
$errorContra = false;

if ($_POST){

	if (empty ($_POST['emailUsuario'])){
		$errorEmail = true;
	} else if (filter_var($_POST['emailUsuario'], FILTER_VALIDATE_EMAIL)===false){
		$errorEmail = true;
	}

	if (empty ($_POST['contraseña'])){
		$errorContra = true;
	}

	if ($errorEmail == false && $errorContra == false){
		header("location: ".APP_URL."/index.php"); exit();

	}
}
?>
<div class="placeholder"></div>
<div class="container">
	<div class= "row justify-content-center">
		<div class= "contenedorUno col-12 col-sm-12 col-md-4 col-lg-4 ">
			<form action="login.php" method="post" enctype="multipart/form-data">
				<label> Ingresá a tu cuenta </label>
				<br></br>
				<input type="email" placeholder="user@email.com" name="emailUsuario">
				<?php if ($errorEmail == true )
					echo 'Email y/o contraseña incorrecta';
				?>
				<br></br>
				<label> Contraseña </label>
				<br></br>
				<input type="password" name="contraseña" minlength="6">
				<?php if ($errorContra == true )
					echo 'Email y/o contraseña incorrecta';
				?>

				<br></br>
				<button type="submit">Ingresá</button>
				<button type="reset">Borrar</button>
				<br></br>
				<a href="contraseña.php"> Olvidé mi contraseña </a>
				<!-- ventana a recuperar contraseña -->
			</form>
		</div>

		<div class="contenedorDos col-12 col-sm-12 col-md-4 col-lg-4">
			<a href="https://www.facebook.com" target="_blank"> Ingresar con Facebook </a>
			<br></br>
			<a href="registrarse.php"> ¿No tenés cuenta? </a>
		<!-- button que te lleve a registro -->
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
