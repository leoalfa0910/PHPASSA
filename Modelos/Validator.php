<?php
namespace App\Modelos;
use App\Modelos\DB;
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
	/**
	 * @param params
	 * @return returns?
	 */
	public function validarInformacionRegistro($info)
	{
		
		$errores = [];

		$info['nombre'] = trim( $info['nombre'] );
		$info['apellido'] = trim( $info['apellido'] );
		$info['email'] = trim( $info['email'] );

		if ( empty( $info['nombre'] ) ){
			$errores['nombre'] = 'Ingrese su nombre aquí';
		} else if ( strlen( $info['nombre'] ) < 4 ){
			$errores['nombre'] = 'El nombre es demasiado corto';
		}



		if ( empty( $info['apellido'] ) ){
			$errores['apellido'] = 'Ingrese su apellido aquí';
		} else if ( strlen( $info['apellido'] ) < 4 ){
			$errores['apellido'] = 'El apellido es demasiado corto';
		}

		if ( empty($info['email']) ) {
			$errores['email'] = 'Debe ingresar el Correo';
		} else if (filter_var( $info['email'] , FILTER_VALIDATE_EMAIL )===false) {
			$errores['email'] = 'El Correo es inválido';
		} elseif ( DB::traerPorEmail( $info['email'] ) ) {
			$errores['email'] = 'El email ya existe';
		}

		if ( empty($info['contrasenia']) ){
			$errores['contrasenia'] = 'Debe ingresar una contraseña';
		}

		if (strlen($info['contrasenia']) > 0 && strlen($info['contrasenia']) < 8 ) {
			$errores['contrasenia']= 'La contraseña ingresada es demasiado corta';
		}

		if ($info['contrasenia'] !== $info['passDeNuevo']){
			$errores['passDeNuevo'] = 'La contraseña no coincide';
		}
		return $errores;
	}
}