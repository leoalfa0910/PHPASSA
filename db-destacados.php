<?php 
include_once( 'autoload.php' );	
use App\Modelos\DB;

$conex = DB::conectar();

$sql = 'SELECT * FROM productos WHERE destacado = 1';
$results =$conex->query($sql);
$destacados = $results->fetchAll(PDO::FETCH_OBJ);

