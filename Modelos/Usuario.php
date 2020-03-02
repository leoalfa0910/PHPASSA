<?php
namespace App\Modelos;

// use App\Modelos\DB;
use App\Traits\SubirImagen;

class Usuario {
  private $nombre;
  private $apellido;
  private $email;
  private $sexo;
  private $nacionalidad;
  private $nacimiento;
  private $direccion;
  private $cp;
  private $telefono;
  private $dni;
  private $foto;
  private $contrasenia;



	use SubirImagen;

	/**
	* Constructor
	*/

	public function __construct($email, $contrasenia, $nombre, $apellido, $sexo = NULL, $nacionalidad = NULL, $nacimiento = NULL, $direccion = NULL, $cp = NULL, $telefono = NULL, $dni = NULL, $foto = NULL){
		$this->email = $email;
		$this->contrasenia = $contrasenia;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->sexo = $sexo;
		$this->telefono = $telefono;
		$this->nacionalidad = $nacionalidad;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
		$this->cp = $cp;
		$this->dni = $dni;
		$this->foto = $foto;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
	  	$this->nombre = $nombre;

	  	return $this;
	}

	public function getApellido()
	{
	  	return $this->apellido;
	}

	public function setApellido($apellido)
	{
	  $this->apellido = $apellido;

	  return $this;
	}

	public function getEmail()
	{
	  return $this->email;
	}

	public function setEmail($email)
	{
	  $this->email = $email;

	  return $this;
	}

	public function getSexo()
	{
	  return $this->sexo;
	}

	public function setSexo($sexo)
	{
	  $this->sexo = $sexo;

	  return $this;
	}

	public function getNacionalidad()
	{
	  return $this->nacionalidad;
	}

	public function setNacionalidad($nacionalidad)
	{
	  $this->nacionalidad = $nacionalidad;

	  return $this;
	}

	public function getNacimiento()
	{
	  return $this->nacimiento;
	}

	public function setNacimiento($nacimiento)
	{
	  $this->nacimiento = $nacimiento;

	  return $this;
	}

	public function getDireccion()
	{
	  return $this->direccion;
	}

	public function setDireccion($direccion)
	{
	  $this->direccion = $direccion;

	  return $this;
	}

	public function getCp()
	{
	  return $this->cp;
	}

	public function setCp($cp)
	{
	  $this->cp = $cp;

	  return $this;
	}

	public function getTelefono()
	{
	  return $this->telefono;
	}

	public function setTelefono($telefono)
	{
	  $this->telefono = $telefono;

	  return $this;
	}

	public function getDni()
	{
	  return $this->dni;
	}

	public function setDni($dni)
	{
	  $this->dni = $dni;

	  return $this;
	}

	public function getFoto()
	{
	  return $this->foto;
	}

	public function setFoto($foto)
	{
	  $this->foto = $foto;

	  return $this;
	}

	public function getContrasenia()
	{
	  return $this->contrasenia;
	}

	public function setContrasenia($contrasenia)
	{
	  $this->contrasenia = $contrasenia;

	  return $this;
	}
}
