<?php
use App\Modelos\DB;

/* DB */
include 'Modelos/DB.php';
$pdo = DB::conectar();
require_once 'app.php';
/* 	Variables globales  */
include 'db-productos.php'; // $productos
include 'db-usuarios.php'; // $usuarios
include 'db-destacados.php'; // $destacados
include 'Traits/SubirImagen.php';
include 'Modelos/Auth.php';
$auth = new App\Modelos\Auth;

/* 		Modelos 	 */
include 'Modelos/Validator.php';
include 'Modelos/Producto.php';
include 'Modelos/Usuario.php';



