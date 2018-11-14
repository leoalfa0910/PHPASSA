<?php

include '../autoload.php';

use App\Modelos\Usuario;
use App\Modelos\DB;
use App\Modelos\Validator;

$validator = new Validator;

$errores = $validator->validarInformacionRegistro($_POST);

if ($_POST && ! count($errores)) {
	/**
	 * Las Variables
	 */
	$nombre = $_POST['nombre'] ?? NULL;
	$apellido = $_POST['apellido'] ?? NULL;
	$sexo = $_POST['sexo'] ?? NULL;
	$pais = $_POST['pais'] ?? NULL;
	$email = $_POST['email'];
	$nombreDeUsuario = $_POST['nombreDeUsuario'];
	$pass = $_POST['pass'] ?? NULL;

	/**
	 * Instancio el usuario sin la foto ya que la pongo después cuando llamo al metodo del trait que sube la foto y me devuelve la ruta para guardarla en la DB...
	 */
	$usuario = new Usuario($nombre, $apellido, $sexo, $pais, $email, $pass);

	/**
	 * Subo la foto y con lo que me devuelve la seteo.
	 */
	$rutaImagen = $usuario->subirImagen($usuario);

	if (isset($_FILES['foto'])) $usuario->setFoto($rutaImagen);

	/**
	 * Guardamos
	 * @return success: [Usuario $usuario, $error], error: string PDOException->getMessage()
	 */

	$id = DB::guardarUsuario($usuario); /* retorna array [objeto $this, string $respuesta, int $id] */

	/**
	 * Nos vamos a la página del usuario nuevo
	 */

	exit(header("Location: /profile.php?id={$id}"));
} else {
	$_SESSION['errores'] = $errores;
	exit(header("Location: /register.php"));
}
