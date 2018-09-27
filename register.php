<?php

/* aquí irá el header */
include('header.php');

include('paises.php');

$errorNombreCompleto = '';
$errorCorreo = '';
$errorImagenDePerfil = '';
$errorUsuario = '';
$errorPass = '';
$errorPassDeNuevo = '';

if( $_POST ){
  var_dump($_POST);

$_POST['nombreCompleto']=trim( $_POST['nombreCompleto'] );
$_POST['correoElectronico']=trim( $_POST['correoElectronico'] );
$_POST['nombreDeUsuario']=trim( $_POST['nombreDeUsuario'] );
;
  if( $_POST['pass'] !== $_POST['passDeNuevo']) {
    $errorPassDeNuevo = 'La contraseña no coincide';
  }

  if( empty( $_POST['nombreCompleto'] ) ){
      $errorNombreCompleto = '<img src="aqui.png" width=30px> Ingrese su nombre aquí';
    } else if ( strlen( $_POST['nombreCompleto'] ) < 4 ){
      $errorNombreCompleto = 'El nombre es demasiado corto';
    }

  if( empty($_POST['correoElectronico']) ){
      $errorCorreo = 'Debe ingresar el Correo';
    }else if (filter_var( $_POST['correoElectronico'] , FILTER_VALIDATE_EMAIL )===false) {
      $errorCorreo = 'El Correo es inválido';
    }

    if( empty($_POST['nombreDeUsuario']) ){
        $errorUsuario = 'Debe ingrear nombre de usuario';
    } elseif ($_POST['nombreDeUsuario'] < 5 )  {
        $errorUsuario = 'El nombre debe poseer al menos 5 caracteres';

    }

    if( empty($_POST['pass']) ){
        $errorPass = 'Debe ingresar una contraseña';
    } elseif ($_POST['pass'] < 8 ) {
        $errorPass= 'La contraseña ingresada es demasiado corta';

    }

    if($_POST['pass'] !== $_POST['passDeNuevo']){
      $errorPassDeNuevo = 'La contraseña no coincide';
    }

}

if ($_FILES['imagenDePerfil']['error'] == UPLOAD_ERR_OK);
    $origen = $_FILES['imagenDePerfil']['tmp_name'];
    $ext = pathinfo($_FILES['imagenDePerfil']['name'], PATHINFO_EXTENSION);
    $nombreDeImagen = $_POST['nombreDeUsuario'] . '.' . $ext;
    $destino = 'img/' . $nombreDeImagen;

    move_uploaded_file($origen, $destino);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloFormulario.css">
    <title>Formulario</title>
  </head>
  <body>

    <div class="container">

      <section>

        <form class="" action="formulario.php" method="post" enctype="multipart/form-data">

          <h1>Formulario de Registro:</h1>

          <br>

          <div class="row">
            <div class="col-12 nombre">
              <label for="nombreCompleto">Nombre y Apellido:</label>
              <input id="nombreCompleto"  type="text" name="nombreCompleto" value="" placeholder="--> Ingrese su nombre">
              <?php echo $errorNombreCompleto ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <label class="sex" for="">Sexo:</label>
              <input class="sex" type="radio" name="Sexo" value="M">Masculino
              <input class="sex" type="radio" name="Sexo" value="F">Femenino
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <select class="" name="pais" required>
                <option selected="true" disabled="disabled">Seleccione su país de nacimiento:</option>
                <?php foreach ($paises as $pais) { ?>
                <option value=""><?php echo $pais['nombre']; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <br>

          <div class="row correo">
            <div class="col-1">
              <img src="correo2.png" alt="">
            </div>
            <div class="col-11"
              <label for="correoElectronico">Correo Electrónico:</label>
              <input id="correoElectronico" type="text" name="correoElectronico" value="">
              <?php echo $errorCorreo ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <label for="nombreDeUsuario">Nombre de Usuario:</label>
              <input id="nombreDeUsuario" type="text" name="nombreDeUsuario" value="" placeholder="">
              <?php echo $errorUsuario ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <label for="imagenDePerfil">Imagen de Perfil:</label>
              <input type="file" name="imagenDePerfil" value="" required>
              <?php echo $errorImagenDePerfil ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <label for="pass">Contraseña:</label>
              <input id="pass" type="password" name="pass" value="">
              <?php echo $errorPass ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <label for="passDeNuevo">Repita su contraseña:</label>
              <input id="passDeNuevo" type="password" name="passDeNuevo" value="" placeholder="">
              <?php echo $errorPassDeNuevo ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <button type="submit" name="button">¡Registrame!</button>
              <br><br>
              <button type="reset" name="button">Cancelar</button>
            </div>
          </div>

        </form>
      </section>

      <br>
      
<?php include('footer.php') ?>
