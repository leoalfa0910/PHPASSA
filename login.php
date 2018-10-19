
<?php include_once 'autoload.php'; ?>
    <?php include 'header.php'; ?>

    <?php

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
        Header ("location: " . APP_URL . "/index.php"); exit();

      }
      //var_dump($_POST);
    }
    ?>
    <section id="login">
      <div class="container">
        <div>
          <h2 class="text-center">Login</h2>
        </div>
        <div class= "row justify-content-center">

            <div class= "contenedorUno col-12 col-sm-12 col-md-4 col-lg-4 ">
              <form action="login.php" method="post" enctype="multipart/form-data">
                <div class="form-group">

                  <br><br>
                  <label for="exampleInputEmail1">Usuario</label>
                  <input type="email" name="emailUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@email.com">
                  <small id="emailHelp" class="form-text text-muted"></small>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" name="contraseña" minlength="6" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <?php if ($errorEmail == true || $errorContra == true )
                    echo 'Email y/o contraseña incorrecta';
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
