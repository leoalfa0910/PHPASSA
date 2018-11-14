<?php

/* aquí irá el header */
include('header.php');

include('paises.php');


 ?>


  <section id="register">
    <div class="container">


        <form class="" method="post" action="Controladores/AgregarUsuario.php" enctype="multipart/form-data">

          <h2>Formulario de Registro:</h2>

          <br>


          <div class="row">
            <div class="col-12 nombre form-group">
              <label for="nombre">Nombre:</label>
              <input class="form-control" id="nombre"  type="text" name="nombre" value="<?php echo $_SESION['post']['nombre'] ?? '' ?>">
              <span class="error"><?php
		          if (isset($_SESSION['errores']['nombre'])) { 
		            echo $_SESSION['errores']['nombre'];
		            unset($_SESSION['errores']['nombre']);
		          } 
              ?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-12 nombre form-group">
              <label for="apellido">Apellido:</label>
              <input class="form-control" id="apellido"  type="text" name="apellido" value="<?php echo $_SESION['post']['apellido'] ?? '' ?>">
              <span class="error"><?php
		          if (isset($_SESSION['errores']['apellido'])) { 
		            echo $_SESSION['errores']['apellido'];
		            unset($_SESSION['errores']['apellido']);
		          } 
              ?></span>
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
              <select class="form-control" name="nacionalidad">
                <option selected="true" disabled="disabled">Seleccione su país de nacimiento:</option>
                <?php for($i = 0; $i < count($paises); $i++) { ?>
                <option value="<?= $paises[$i] ?>"><?= $paises[$i] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <br>

          <div class="row correo">
            <div class="col-12 form-group">
              <label for="email">Correo Electrónico:</label>
              <input class="form-control" id="email" type="text" name="email" value="<?php echo $_SESION['post']['email'] ?? '' ?>">
              <span class="error"><?php
		          if (isset($_SESSION['errores']['email'])) { 
		            echo $_SESSION['errores']['email'];
		            unset($_SESSION['errores']['email']);
		          } 
              ?></span>
            </div>
          </div>

          <br>

          <!-- <div class="row">
            <div class="col-12 form-group">
              <label for="nombreDeUsuario">Nombre de Usuario:</label>
              <input class="form-control" id="nombreDeUsuario" type="text" name="nombreDeUsuario" value="<?php //echo $_SESION['post']['nombreDeUsuario'] ?? '' ?>" placeholder="">
              <span class="error"><?php
		          // if (isset($_SESSION['usuario'])) { 
		          //   echo $_SESSION['usuario'];
		          //   unset($_SESSION['usuario']);
		          // } 
              ?></span>
            </div>
          </div> -->

          <!-- <br> -->
          <br>

          <div class="row">
            <div class="col-12">
              <label for="imagenDePerfil">Imagen de Perfil:</label><br>
              <input class="" type="file" name="foto" value="">
              <span class="error"><?php
		          if (isset($_SESSION['errores']['foto'])) { 
		            echo $_SESSION['errores']['foto'];
		            unset($_SESSION['errores']['foto']);
		          } 
              ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="pass">Contraseña:</label>
              <input class="form-control" id="contrasenia" type="password" name="contrasenia" value="" placeholder="">
              <span class="error"><?php
		          if (isset($_SESSION['errores']['contrasenia'])) { 
		            echo $_SESSION['errores']['contrasenia'];
		            unset($_SESSION['errores']['contrasenia']);
		          } 
              ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 form-group">
              <label for="passDeNuevo">Repita su contraseña:</label>
              <input class="form-control" id="passDeNuevo" type="password" name="passDeNuevo" value="" placeholder="">
              <span class="error"><?php
		          if (isset($_SESSION['errores']['passDeNuevo'])) { 
		            echo $_SESSION['errores']['passDeNuevo'];
		            unset($_SESSION['errores']['passDeNuevo']);
		          } 
              ?></span>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-12 botones">
              <button class="btn btn-primary" type="submit" name="button">¡Registrame!</button>
              &nbsp
              <button class="btn btn-primary" type="reset">Cancelar</button>
            </div>
          </div>

        </form>
      </div>
      </section>

      <br>

<?php include('footer.php') ?>
