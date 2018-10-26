<?php 
namespace App\Controllers;

include_once '../autoload.php';
use App\Modelos\Producto;
use App\Modelos\DB;
if ($_POST) {
	/**
	 * Las Variables
	 */
	$nombre = $_POST['nombre'] ?? '';
	$marca = $_POST['marca'] ?? '';
	$descripcion = $_POST['descripcion'] ?? '';
	$stock = $_POST['stock'] ?? '';
	$precio = $_POST['precio'] ?? 0;
	$categorias = $_POST['categorias'] ?? []; // array
	/**
	 * Instancio el producto sin la foto ya que la pongo después cuando llamo al metodo del trait que sube la foto y me devuelve la ruta para guardarla en la DB...
	 */
	$producto = new Producto($nombre, $marca, $descripcion, $precio, $stock, $categorias);
	
	/**
	 * Subo la foto y con lo que me devuelve la seteo.
	 */
	$rutaImagen = $producto->subirImagen($producto);

	if (isset($_FILES['foto'])) $producto->setFoto($rutaImagen);
	
	/**
	 * Guardamos
	 * @return success: [Producto $producto, $error], error: string PDOException->getMessage()
	 */

	$resp = $producto->guardarProducto();

	/**
	 * Nos vamos a la página del producto nuevo
	 */
	// $pdo = DB::conectar();
	$id = $resp[2];
	exit(header("Location: /producto.php?id={$id}"));
}