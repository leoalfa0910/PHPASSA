<?php
namespace App\Modelos;

class DB {

	static private $dsn= 'mysql:host=200.68.105.36;dbname=uv025077_proyectox';
	static private $user = 'uv025077_proyX';
	static private $pass = '2sJ[NQRLe8xBxDVUx7r2BCpmjUr9hV@2*h?wtM62G/UbsbFErAoi({HUE[P]x';
	static private $opt = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];
	
	public static function conectar(){
		try {

    		$conex = new \PDO( self::$dsn, self::$user, self::$pass, self::$opt );
    		return $conex;

  		} catch( PDOException $exception ) {

    		$error = 'El error es: ' . $exception->getMessage();
  			return $error;
  		}
	}

}