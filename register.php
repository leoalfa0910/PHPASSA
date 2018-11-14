<?php

/* aquí irá el header */
include('header.php');

include('paises.php');


 ?>


  <section id="register">
    <div class="container">


        <form class="" method="post" action="Controllers/AgregarUsuario.php" enctype="multipart/form-data">

          <h2>Formulario de Registro:</h2>

          <br>


          <div class="row">
            <div class="col-12 nombre form-group">
              <label for="nombreCompleto">Nombre:</label>
              <input class="form-control" id="nombre"  type="text" name="nombre" value="<?php echo $_POST['nombre'] ?? '' ?>">
              <span class="error"><?php echo $errorNombre ?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-12 nombre form-group">
              <label for="nombreCompleto">Apellido:</label>
              <input class="form-control" id="apellido"  type="text" name="apellido" value="<?php echo $_POST['apellido'] ?? '' ?>">
              <span class="error"><?php echo $errorApellido ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group sexo">
              <label class="" for="">Sexo:</label>
              <input class="form-check-input" type="radio" name="sexo" value="M"><label class="form-check-label">Masculino</label>
              <input class="form-check-input" type="radio" name="sexo" value="F"><label class="form-check-label">Femenino</label>
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
              <input class="form-control" id="correoElectronico" type="text" name="correoElectronico" value="<?php echo $_POST['correoElectronico'] ?? '' ?>">
              <span class="error"><?php echo $errorCorreo ?></span>
            </div>
          </div>

          <br>

          <br>

          <div class="row">
            <div class="col-12">
              <label for="imagenDePerfil">Imagen de Perfil:</label><br>
              <input class="" type="file" name="imagenDePerfil" value="">
              <span class="error"><?php echo $errorImagenDePerfil ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="pass">Contraseña:</label>
              <input class="form-control" id="pass" type="password" name="pass" value="" placeholder="">
              <span class="error"><?php echo $errorPass ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="passDeNuevo">Repita su contraseña:</label>
              <input class="form-control" id="passDeNuevo" type="password" name="passDeNuevo" value="" placeholder="">
              <span class="error"><?php echo $errorPassDeNuevo ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 botones">
              <button class="btn btn-primary" type="submit" name="button">¡Registrame!</button>
              &nbsp
              <button class="btn btn-primary" type="reset" name="button">Cancelar</button>
            </div>
          </div>

        </form>
      </div>
      </section>

      <br>

<?php include('footer.php') ?>
