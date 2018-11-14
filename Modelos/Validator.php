<?php
namespace App\Modelos;
class Validator {
	/**
	 * @param login info y pdo obj
	 * @return bool
	 */
	public function validarLogin($info, $pdo)	
	{
		$email = $info['email'];
		$contra = $info['contra'];
		$sql = 'SELECT email, contrasenia FROM usuarios WHERE email = :email';
		$stmt = $pdo->prepare($sql);
		$stmt->execute([':email' => $email]);
		$usuario = $stmt->fetch(\PDO::FETCH_OBJ);
		if ($usuario) {
			if (password_verify($contra, $usuario->contrasenia)) {
				return true;
			} else {
				return false;
			}
		} else return false;
	}
	/**
	 * @param params
	 * @return returns?
	 */
	public function validarInformacion($info)
	{	
		$errores = [];
		$errores['email'] = false;
		$errores['contra'] = false;
		if (empty ($info['email'])){
		    $errores['email'] = true;
		} else if (filter_var($info['email'], FILTER_VALIDATE_EMAIL)===false){
		$errores['email'] = true;
		}
		if (empty ($info['contra'])){
		$errores['contra'] = true;
		}
		return $errores;
	 
	}
	/**
	 * @param params
	 * @return returns?
	 */
	public function validarInformacionRegistro($info)
	{
		

		$errorNombre = '';
		$errorApellido = '';
		$errorCorreo = '';
		$errorImagenDePerfil = '';
		$errorUsuario = '';
		$errorPass = '';
		$errorPassDeNuevo = '';

		$_POST['nombre']=trim( $_POST['nombre'] );
		$_POST['apellido']=trim( $_POST['apellido'] );
		$_POST['correoElectronico']=trim( $_POST['correoElectronico'] );
		$_POST['nombreDeUsuario']=trim( $_POST['nombreDeUsuario'] );

		  if ( $_POST['pass'] !== $_POST['passDeNuevo']) {
		    $errorPassDeNuevo = 'La contraseña no coincide';
		  }

		  if ( empty( $_POST['nombre'] ) ){
		      $errorNombre = 'Ingrese su nombre aquí';
		    } else if ( strlen( $_POST['nombre'] ) < 4 ){
		      $errorNombre = 'El nombre es demasiado corto';
		    }

		    if ( empty( $_POST['apellido'] ) ){
		        $errorApellido = 'Ingrese su apellido aquí';
		      } else if ( strlen( $_POST['apellido'] ) < 4 ){
		        $errorApellido = 'El apellido es demasiado corto';
		      }

		  if ( empty($_POST['correoElectronico']) ){
		      $errorCorreo = 'Debe ingresar el Correo';
		    }else if (filter_var( $_POST['correoElectronico'] , FILTER_VALIDATE_EMAIL )===false) {
		      $errorCorreo = 'El Correo es inválido';
		    }

		    if ( empty($_POST['nombreDeUsuario']) ){
		        $errorUsuario = 'Debe ingresar nombre de usuario';
		    } elseif (strlen($_POST['nombreDeUsuario']) < 5 )  {
		        $errorUsuario = 'El nombre debe poseer al menos 5 caracteres';
		    }

		    if ( empty($_POST['pass']) ){
		        $errorPass = 'Debe ingresar una contraseña';
		    }

		    if (strlen($_POST['pass']) > 0 && strlen($_POST['pass']) < 8 ) {
		        $errorPass= 'La contraseña ingresada es demasiado corta';
		    }

		    if ($_POST['pass'] !== $_POST['passDeNuevo']){
		      $errorPassDeNuevo = 'La contraseña no coincide';
		    }

		    if ($_FILES['imagenDePerfil']['error'] == UPLOAD_ERR_OK) {
		        $ext = pathinfo($_FILES['imagenDePerfil']['name'], PATHINFO_EXTENSION);
		        if ( $ext == 'jpg' ||  $ext == 'jpeg' || $ext == 'png' ){
		          $nombreDeImagen = $_POST['nombreDeUsuario'] . '.' . $ext;
		        move_uploaded_file($_FILES['imagenDePerfil']['tmp_name'], 'img/usuarios' . $nombreDeImagen);
		        } else {
		          $errorImagenDePerfil = 'El Formato es inválido';
		        }

		    

		}
	}
}