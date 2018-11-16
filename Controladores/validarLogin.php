<?php 
use App\Modelos\Validator;
use App\Modelos\Auth;
include_once '../autoload.php'; 

if ($_POST){
$validator = new Validator;

$errores = $validator->validarInformacion($_POST);

/**************************************************************/
   if ($errores['email'] == false && $errores['contra'] == false){
      $logueado = $validator->validarLogin($_POST, $pdo); 
      if ($logueado) {
        $auth->loguear($_POST['email']);
        header("location: " . APP_URL . "index.php"); exit();        
      } else {
        // var_dump($logueado); die;
        $_SESSION['error_login'] = '<div class="alert alert-danger">El usuario y contraseña no coinciden</div>';
      
      header("location: " . APP_URL . "login.php"); exit();

      }

    } else {
      $_SESSION['error_email'] = $errores['email'];
      $_SESSION['error_contra'] = $errores['contra'];
      header("location: " . APP_URL . "login.php"); exit();
    }
/**************************************************************/
  
}