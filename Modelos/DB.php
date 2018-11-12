<?php
namespace App\Modelos;

class DB {

	static private $dsn= 'mysql:host=200.68.105.36;dbname=uv025077_proyectox';
	static private $user = 'uv025077_marcos';
	static private $pass = 'tE6?LV@QLtT.';
	static private $opt = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];
	
	public static function conectar(){
		try {

    		$conex = new \PDO( self::$dsn, self::$user, self::$pass, self::$opt );
    		return $conex;

  		} catch ( PDOException $exception ) {

    		$error = 'El error es: ' . $exception->getMessage();
  			return $error;

  		}
	}
}