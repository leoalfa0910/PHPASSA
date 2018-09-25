<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

  </head>
  <body>
    <?php include 'header.php'; ?>
    <?php

    $errorNombre = '';
    $errorEmail = '';

    if ($_POST){

      $_POST['nameUsuario']= trim( $_POST['nameUsuario']);

      if (empty ($_POST['nameUsuario'])){
         $errorNombre = 'Debe ingresar el nombre de usuario';
       } else if (strlen($_POST['nameUsuario']) <2 ){
         $errorNombre = 'el nombre debe tener al menos dos caracteres.';
       } else if (is_numeric($_POST['nameUsuario'])===true){
         $errorNombre= 'No puede empezar con un numero';
       }
       // ver con nahuel que validaciones dió él. Consultar con diego/juanca como validar que exista el usuario ingresado.
       // seria un else foreach que recorra un array con los usuarios ingresados y si no lo encuentra da error.

      if (empty ($_POST['emailUsuario'])){
        $errorEmail = 'Debe ingresar su email';
      } else if (filter_var($_POST['emailUsuario'], FILTER_VALIDATE_EMAIL)===false){
     $errorEmail = 'El correo electronico es invalido';
      }

      var_dump($_POST);
      }
    ?>





    <div class="container-fluid">
      <div class= "row container">
          <div class= "contenedorUno col-12 col-sm-12 col-md-4 col-lg-4">
            <form action="login.php" method="post" enctype="multipart/form-data">
              <label> Ingresá a tu cuenta </label>
              <br></br>
              <label> Usuario </label><br></br>
              <input type="text" name="nameUsuario">
              <?php echo $errorNombre; ?>
              <br></br>
              <input type="email" placeholder="user@email.com" name="emailUsuario">
              <?php echo $errorEmail; ?>
              <br></br>
              <label> Contraseña </label>
              <br></br>
              <input type="password" name="contraseña" minlength="6">

              <br></br>
              <button type="submit">Ingresá</button>
              <button type="reset">Borrar</button>
              <br></br>
              <a href="contraseña.php"> Olvidé mi contraseña </a>
              <!-- ventana a recuperar contraseña -->
          </div>

          <div class="contenedorDos col-12 col-sm-12 col-md-4 col-lg-4">
            <a href="https://www.facebook.com" target="_blank"> Ingresar con Facebook </a>
            <br></br>
            <a href="registrate.php"> ¿No tenés cuenta? </a>
            <!-- button que te lleve a registro -->
          </div>
        </div>
    </div>
  </body>
</html>
