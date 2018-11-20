<?php include 'header.php'; ?>

<?php

  $emailError = false;

  if ($_POST){

if(empty($_POST['emailContra'])){
  $emailError = true;
} else if (filter_var($_POST['emailContra'], FILTER_VALIDATE_EMAIL)===false){
  $emailError = true;
}
//var_dump($_POST);
}
?>
<section id="Recucontra">
  <div class="container">
    <div>
      <h3> Recuperación de Contraseña </h3>
    </div>
    <div class="row justify-content-center">
      <div>
        <form action="contrasenia.php" method="post" enctype="multipart/form-data">
          <div>
            <label for="EmailContraseña">Email:</label>
            <input type="email" name="emailContra" class="form-control" id="EmailContraseña" aria-describedby="emailHelp" placeholder="user@email.com">
            <?php if($emailError == true){
              echo 'Email Incorrecto';
            } //else if(){
            //   echo 'Se envió una nueva contraseña a su Email';
            //   // esto debe ser una ventana emergente.
            // }
            ?>
          </div>
          <br></br>
          <div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <br></br>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php') ?>
