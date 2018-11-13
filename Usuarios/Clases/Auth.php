<?php
namespace App\Modelos;
use App\Usuarios\Clases\DB;
class Auth {

 	/**
 	 * @param 
 	 * @return 
 	 */
 	public function __construct()
 	{
 		session_start();
 		if( ! isset($_SESSION['logueado']) && isset($_COOKIE['loguaedo'])) {
 			$_SESSION['logueado'] = $_COOKIE['loguaedo'];
 		}
 	}
 	/**
 	 * @param params
 	 * @return returns?
 	 */
 	public function loguear($email)
 	{
 		$_SESSION['logueado'] = $email;
 	}
 	/**
 	 * @param params
 	 * @return returns?
 	 */
 	public function hayLogueado()
 	{
 		return isset($_SESSION['logueado']);
 	}

 	/**
 	 * @param params
 	 * @return returns?
 	 */
 	public function usuarioLogueado($pdo)	
 	{
 		if($this->hayLogueado()) {
 			$email = $_SESSION['logueado'];
 			return $pdo::traerPorEmail($email);
 		} else {
 			return NULL;
 		}
 	}
 	/**
 	 * @param email
 	 * @return 
 	 */
 	public function recordar($email)
 	{
 		setcookie('logueado', $email, time() + 3600 * 24 * 365);
 	}


 	/**
 	 * @param params
 	 * @return returns?
 	 */
 	public function logout()
 	{
 		setcookie('logueado', '', time() - 1);
 		session_destroy();
 	}

 }