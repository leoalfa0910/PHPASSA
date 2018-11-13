<?php
namespace App\Modelos;

class Validator {
	/**
	 * @param login info y pdo obj
	 * @return bool
	 */
	public function validarLogin($info, $pdo)	
	{
		$email = $info['email'];
		$contra = $info['contra'];
		$sql = 'SELECT email, contrasenia FROM usuarios WHERE email = :email';
		$stmt = $pdo->prepare($sql);
		$stmt->execute([':email' => $email]);
		$usuario = $stmt->fetch(\PDO::FETCH_OBJ);
		if ($usuario) {
			if (password_verify($contra, $usuario->contrasenia)) {
				return true;
			} else {
				return false;
			}
		} else return false;
	}

	/**
	 * @param params
	 * @return returns?
	 */
	public function validarInformacion($info)
	{	
		$errores = [];
		$errores['email'] = false;
		$errores['contra'] = false;
		if (empty ($info['email'])){
		    $errores['email'] = true;
		} else if (filter_var($info['email'], FILTER_VALIDATE_EMAIL)===false){
		$errores['email'] = true;
		}

		if (empty ($info['contra'])){
		$errores['contra'] = true;
		}

		return $errores;
	 
	}
}
