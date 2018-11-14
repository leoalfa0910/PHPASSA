<?php

include '../autoload.php';

use App\Modelos\Usuario;
use App\Modelos\DB;
use App\Modelos\Validator;

// var_dump($_POST); die;
$validator = new Validator;

$errores = $validator->validarInformacionRegistro($_POST);

if ($_POST && ! count($errores)) {
	/**
	 * Las Variables
	 */
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'] ?? NULL;
	$nacionalidad = $_POST['nacionalidad'] ?? NULL;
	$contrasenia = password_hash($_POST['contrasenia'], PASSWORD_DEFAULT);

	/**
	 * Instancio el usuario sin la foto ya que la pongo después cuando llamo al metodo del trait que sube la foto y me devuelve la ruta para guardarla en la DB...
	 */
	$usuario = new Usuario($email, $contrasenia, $nombre, $apellido, $sexo, $nacionalidad);

	/**
	 * Subo la foto y con lo que me devuelve la seteo.
	 */
	$rutaImagen = $usuario->subirImagen($usuario);

	if (isset($_FILES['foto'])) $usuario->setFoto($rutaImagen);
	else {
		$errores = [];
		$errores['foto'] = 'tenés que subir una foto';
		$_SESSION['errores'] = $errores;
		$_SESSION['post'] = $_POST;
		exit(header("Location: /register.php"));
	}

	/**
	 * Guardamos
	 * @return success: [Usuario $usuario, $error], error: string PDOException->getMessage()
	 */

	$id = DB::guardarUsuario($usuario); /* retorna $id */

	/**
	 * Nos vamos a la página del usuario nuevo
	 */

	exit(header("Location: /profileUser.php?id={$id}"));
} else {
	$_SESSION['errores'] = $errores;	
	$_SESSION['post'] = $_POST ?? NULL;
	exit(header("Location: /register.php"));
}
