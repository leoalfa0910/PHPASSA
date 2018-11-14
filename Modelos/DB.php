<?php
namespace App\Modelos;

use App\Modelos\Producto;
use App\Modelos\Usuario;
use App\Modelos\DB;


abstract class DB {

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
	 /**
     * @param
     * @return array [$this, $response];
     */
    public static function guardarProducto(Producto $producto) {
    	try {
    	$sql = 'INSERT INTO productos (nombre, marca, descripcion, categoria, precio, foto, stock, destacado) VALUES (:nombre, :marca, :descripcion, :categoria, :precio, :foto, :stock, :destacado)';
    	$pdo = self::conectar();
    	$stmt = $pdo->prepare($sql);
    	$stmt->bindValue(':nombre', $producto->getNombre(), \PDO::PARAM_STR);
    	$stmt->bindValue(':marca', $producto->getMarca(), \PDO::PARAM_STR);
    	$stmt->bindValue(':descripcion', $producto->getDescripcion(), \PDO::PARAM_STR);
    	$stmt->bindValue(':categoria', json_encode($producto->getCategoria()), \PDO::PARAM_STR);
    	$stmt->bindValue(':precio', $producto->getPrecio(), \PDO::PARAM_INT);
    	$stmt->bindValue(':foto', $producto->getFoto(), \PDO::PARAM_STR);
        $stmt->bindValue(':stock', $producto->getStock(), \PDO::PARAM_STR);
    	$stmt->bindValue(':destacado', $producto->getDestacado(), \PDO::PARAM_INT);
    	$stmt->execute();
    	$resp = "Se guardó el producto con éxito";
	    } catch(\	PDOException $exception) {
	    	$resp = "Se produjo un error: {$exception->getMessage()}";
	    }
	    return  $pdo->lastInsertId();
    }

    /**
     * @param params
     * @return returns?
     */
    public static function traerPorEmail($email){
    	$sql = 'SELECT * FROM usuarios WHERE email = :email';
    	$stmt = self::conectar()->prepare($sql);
    	$stmt->execute([
    		':email' => $email
    	]);
    	$results = $stmt->fetch(\PDO::FETCH_ASSOC);
    	return $results;
    }

		public function guardarUsuario(Usuario $usuario) {
			try {
				$sql = 'INSERT INTO usuarios (nombre, apellido, sexo, pais, correoElectronico, foto, pass) VALUES (:nombre, :apellido, :sexo, :pais, :correoElectronico, :foto, :pass)';
				$pdo = self::conectar();
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $usuario->getNombre(), \PDO::PARAM_STR);
				$stmt->bindValue(':apellido', $usuario->getApellido(), \PDO::PARAM_STR);
				$stmt->bindValue(':sexo', $usuario->getSexo(), \PDO::PARAM_STR);
				$stmt->bindValue(':pais', $usuario->getNacionalidad(), \PDO::PARAM_STR);
				$stmt->bindValue(':correoElectronico', $usuario->getEmail(), \PDO::PARAM_STR);
				$stmt->bindValue(':foto', $usuario->getAvatar(), \PDO::PARAM_STR);
				$stmt->bindValue(':pass', $usuario->getContrasenia(), \PDO::PARAM_STR);
				$stmt->execute();
				$resp = "Usuario registrado con exito";
			} catch(\	PDOException $exception) {
			  	$resp = "Se produjo un error: {$exception->getMessage()}";
			}
			return [$this, $resp, $pdo->lastInsertId()];
		}

}
