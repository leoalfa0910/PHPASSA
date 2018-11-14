<?php 
include 'header.php';  
?>  
	<section id="login">
      <div class="container">
        <div>
          <h2 class="text-center">Login</h2>
        </div>
        <div class= "row justify-content-center">

            <div class= "contenedorUno col-12 col-sm-12 col-md-4 col-lg-4 ">
              <form action="Controllers/validarLogin.php" method="post" enctype="multipart/form-data">
                <div class="form-group">

                  <br><br>
                  <label for="exampleInputEmail1">Usuario</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@email.com">
                  <small id="emailHelp" class="form-text text-muted"></small>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" name="contra" minlength="6" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <?php if (isset($_SESSION['error_email']) || isset($_SESSION['error_contra'])) {
                    		echo '<div class="alert alert-danger">La contraseña debe tener al menos 6 caracteres y el email debe ser válido.</div>';
                    		unset($_SESSION['error_email']);
                    		unset($_SESSION['error_contra']);
                  	}
                  	if (isset($_SESSION['error_login'])) {
                  		echo $_SESSION['error_login'];
                  		unset($_SESSION['error_login']);
                  	}
                    ?>
                  <br><br>
                  <button type="submit" class="btn btn-primary">Ingresá</button>
                  <br></br>
                  <a href="contrasenia.php"> Olvidé mi contraseña </a>
                <!-- ventana a recuperar contraseña -->
                </div>
            </div>
            <div class="contenedorDos col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="face">
                    <a href="https://www.facebook.com/login.php" target="_blank">
                    <img class="logoface" src="img/facebook-login.png" alt="Facebook"></a>
                  </div>

                  <div class="cuenta">
                    <h5> ¿No tenés cuenta? </h5>
                  </div>
                  <div>
                    <a href="register.php">
                      <button type="button" class="btn btn-terciary">Crear Cuenta</button>
                    </a>
                  </div>

            </div>
          </form>
        </div>
      </div>
    </section>

      <?php include 'footer.php'; ?>
