<?php

require_once 'app.php';
include 'Modelos/DB.php';
$pdo = App\Modelos\DB::conectar();
include 'Traits/SubirImagen.php';
include 'Modelos/Auth.php';
$auth = new App\Modelos\Auth;
include 'Modelos/Validator.php';
include 'Modelos/Producto.php';
include 'Modelos/Usuario.php';
include 'db-productos.php';
include 'db-usuarios.php';
include 'db-destacados.php';


