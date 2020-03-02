<?php
namespace App\Modelos;

use App\Traits\SubirImagen;


class Producto {
	private $id = 0;
	private $nombre;
	private $marca;
	private $descripcion;
	private $categoria;
	private $precio;
	private $foto;
  private $stock;
	private $destacado;

	use SubirImagen;

	/**
	 * Constructor
	 */

	public function __construct($nombre, $marca, $descripcion, $precio, $stock, $categorias, $destacado) {
		$this->nombre = $nombre;
		$this->marca = $marca;
		$this->descripcion = $descripcion;
		$this->precio = $precio;
		$this->stock = $stock;
        $this->categoria = $categorias;
		$this->destacado = $destacado;
	}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     *
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     *
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     *
     * @return self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     *
     * @return self
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestacado()
    {
        return $this->destacado;
    }

    /**
     * @param mixed $destacado
     *
     * @return self
     */
    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;

        return $this;
    }


}
