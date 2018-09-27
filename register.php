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

    if ($_FILES['imagenDePerfil']['error'] == UPLOAD_ERR_OK) {
      $origen = $_FILES['imagenDePerfil']['tmp_name'];
      $ext = pathinfo($_FILES['imagenDePerfil']['name'], PATHINFO_EXTENSION);
      $nombreDeImagen = $_POST['nombreDeUsuario'] . '.' . $ext;
      $destino = 'img/' . $nombreDeImagen;

      move_uploaded_file($origen, $destino);
    }

}



 ?>


  <section id="register">
    <div class="container">


        <form class="" method="post" enctype="multipart/form-data">

          <h2>Formulario de Registro:</h2>

          <br>

          <div class="row">
            <div class="col-12 nombre form-group">
              <label for="nombreCompleto">Nombre y Apellido:</label>
              <input class="form-control" id="nombreCompleto"  type="text" name="nombreCompleto" value="" placeholder="--> Ingrese su nombre">
              <?php echo $errorNombreCompleto ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group sexo">
              <label class="" for="">Sexo:</label>
              <input class="form-check-input" type="radio" name="Sexo" value="M"><label class="form-check-label">Masculino</label>
              <input class="form-check-input" type="radio" name="Sexo" value="F"><label class="form-check-label">Femenino</label>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <select class="form-control" name="pais" required>
                <option selected="true" disabled="disabled">Seleccione su país de nacimiento:</option>
                <?php foreach ($paises as $pais) { ?>
                <option value=""><?php echo $pais; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <br>

          <div class="row correo">
            <div class="col-12 form-group">
              <label for="correoElectronico">Correo Electrónico:</label>
              <input class="form-control" id="correoElectronico" type="text" name="correoElectronico" value="">
              <?php echo $errorCorreo ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="nombreDeUsuario">Nombre de Usuario:</label>
              <input class="form-control" id="nombreDeUsuario" type="text" name="nombreDeUsuario" value="<?php echo $_POST['nombreDeUsuario'] ?? '' ?>" placeholder="">
              <?php echo $errorUsuario ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <label for="imagenDePerfil">Imagen de Perfil:</label><br>
              <input class="" type="file" name="imagenDePerfil" value="" required>
              <?php echo $errorImagenDePerfil ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="pass">Contraseña:</label>
              <input class="form-control" id="pass" type="password" name="pass" value="">
              <?php echo $errorPass ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="passDeNuevo">Repita su contraseña:</label>
              <input class="form-control" id="passDeNuevo" type="password" name="passDeNuevo" value="" placeholder="">
              <?php echo $errorPassDeNuevo ?>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="button">¡Registrame!</button>
              <br><br>
              <button class="btn btn-primary" type="reset" name="button">Cancelar</button>
            </div>
          </div>

        </form>
      </div>
      </section>

      <br>

<?php include('footer.php') ?>
