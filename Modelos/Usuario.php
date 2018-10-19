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
  private $avatar;
  private $contrasenia;
}


use SubirImagen;

/**
 * Constructor
 */

public function __construct($nombre, $apellido, $email, $contrasenia){
  $this->nombre = $nombre;
  $this->apellido = $apellido;
  $this->email = $email;
  $this->contrasenia = $contrasenia;
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

public function getAvatar()
{
    return $this->avatar;
}

public function setAvatar($avatar)
{
    $this->avatar = $avatar;

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

/**
 * @param
 * @return array [$this, $response];
 */
public function guardarUsuario() {
  try {
  $pdo = DB::conectar();
  $sql = 'INSERT INTO usuarios (nombre, apellido, email, contrasenia) VALUES (:nombre, :apellido, :email, :contrasenia)';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':nombre', $this->nombre, \PDO::PARAM_STR);
  $stmt->bindValue(':apellido', $this->apellido, \PDO::PARAM_STR);
  $stmt->bindValue(':email', $this->email, \PDO::PARAM_STR);
  $stmt->bindValue(':contrasenia', $this->contrasenia, \PDO::PARAM_STR);
  $stmt->execute();
  $resp = "Usuario registrado con exito";
  } catch(\	PDOException $exception) {
    $resp = "Se produjo un error: {$exception->getMessage()}";
  }
  return [$this, $resp, $pdo->lastInsertId()];
}
