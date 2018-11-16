<?php 
include_once( 'autoload.php' );	
use App\Modelos\DB;

// $conex = DB::conectar();

$sql = 'SELECT * FROM productos';
$results =$pdo->query($sql);
$productos = $results->fetchAll(PDO::FETCH_OBJ);

