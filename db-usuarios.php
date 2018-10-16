<?php
include_once( 'autoload.php' );
use App\Modelos\DB;

$conex = DB::conectar();

$sql = 'SELECT * FROM usuarios';
$results =$conex->query($sql);
$usuarios = $results->fetchAll(PDO::FETCH_OBJ);
