<?php

require_once 'app.php';
include 'Modelos/DB.php';
$pdo = App\Modelos\DB::conectar();
include 'Traits/SubirImagen.php';
include 'Usuarios/Clases/Auth.php';
$auth = new App\Modelos\Auth;
include 'Usuarios/Clases/Validator.php';
include 'Modelos/Producto.php';
include 'db-productos.php';
include 'db-usuarios.php';
include 'db-destacados.php';


