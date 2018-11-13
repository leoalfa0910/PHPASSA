<?php
use App\Modelos\DB;

require_once 'app.php';
include 'Modelos/DB.php';
$pdo = DB::conectar();
include 'Traits/SubirImagen.php';
include 'Modelos/Producto.php';
include 'db-productos.php';
include 'db-usuarios.php';
include 'db-destacados.php';


