<?php
  $dsn = 'mysql:host=localhost;dbname=proyecto-x';
  $user = 'root';
  $pass = '';
  $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  try{

    $conex = new PDO($dsn, $user, $pass, $opt);

  }catch( PDOException $exception ){

    echo 'El error es:'. $exception->getMessage();
    
  }
 ?>
