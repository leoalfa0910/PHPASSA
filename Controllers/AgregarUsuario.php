<?php
namespace App\Controllers;

include '../autoload.php';

use App\Modelos\Usuario;
use App\Modelos\DB;

if ($_POST) {
	/**
	 * Las Variables
	 */
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$contrasenia = $_POST['contrasenia']; $_SESSION['error_nombre'] = 'asdasdad';

	/**
	 * Instancio el usuario sin la foto ya que la pongo después cuando llamo al metodo del trait que sube la foto y me devuelve la ruta para guardarla en la DB...
	 */
	$usuario = new Usuario($nombre, $apellido, $email, $contrasenia);


	/**
	 * Guardamos
	 * @return success: [Usuario $usuario, $error], error: string PDOException->getMessage()
	 */

	$resp = $usuario->guardarUsuario();

	/**
	 * Nos vamos a la página del usuario nuevo
	 */
	$pdo = DB::conectar();
	$id = $resp[2];
	exit(header("Location: /profile.php?id={$id}"));
}
