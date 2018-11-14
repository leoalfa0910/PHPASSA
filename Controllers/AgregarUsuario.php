<?php
namespace App\Controllers;

include '../autoload.php';

use App\Modelos\Usuario;
use App\Modelos\DB;

if ($_POST) {
	/**
	 * Las Variables
	 */
	$nombre = $_POST['nombre'] ?? '';
	$apellido = $_POST['apellido'] ?? '';
	$sexo = $_POST['sexo'];
	$pais = $_POST['pais'];
	$correoElectronico = $_POST['correoElectronico'] ?? '';
	$pass = $_POST['pass'] ?? '';

	/**
	 * Instancio el usuario sin la foto ya que la pongo después cuando llamo al metodo del trait que sube la foto y me devuelve la ruta para guardarla en la DB...
	 */
	$usuario = new Usuario($nombre, $apellido, $sexo, $pais, $correoElectronico, $pass);

	/**
	 * Subo la foto y con lo que me devuelve la seteo.
	 */
	$rutaImagen = $usuario->subirImagen($usuario);

	if (isset($_FILES['imagenDePerfil'])) $producto->setFoto($rutaImagen);

	/**
	 * Guardamos
	 * @return success: [Usuario $usuario, $error], error: string PDOException->getMessage()
	 */

	$resp = DB::guardarUsuario($usuario); /* retorna array [objeto $this, string $respuesta, int $id] */

	/**
	 * Nos vamos a la página del usuario nuevo
	 */

	$id = $resp;
	exit(header("Location: /profile.php?id={$id}"));
}
