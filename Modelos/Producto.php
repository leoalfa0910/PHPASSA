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
     * @param
     * @return array [$this, $response];
     */
    public function guardarProducto() {
    	try {
    	$pdo = DB::conectar();
    	$sql = 'INSERT INTO productos (nombre, marca, descripcion, categoria, precio, foto, stock, destacado) VALUES (:nombre, :marca, :descripcion, :categoria, :precio, :foto, :stock, :destacado)';
    	$stmt = $pdo->prepare($sql);
    	$stmt->bindValue(':nombre', $this->nombre, \PDO::PARAM_STR);
    	$stmt->bindValue(':marca', $this->marca, \PDO::PARAM_STR);
    	$stmt->bindValue(':descripcion', $this->descripcion, \PDO::PARAM_STR);
    	$stmt->bindValue(':categoria', json_encode($this->categoria), \PDO::PARAM_STR);
    	$stmt->bindValue(':precio', $this->precio, \PDO::PARAM_INT);
    	$stmt->bindValue(':foto', $this->foto, \PDO::PARAM_STR);
        $stmt->bindValue(':stock', $this->stock, \PDO::PARAM_STR);
    	$stmt->bindValue(':destacado', $this->destacado, \PDO::PARAM_INT);
    	$stmt->execute();
    	$resp = "Se guardó el producto con éxito";
	    } catch(\	PDOException $exception) {
	    	$resp = "Se produjo un error: {$exception->getMessage()}";
	    }
	    return [$this, $resp, $pdo->lastInsertId()];
    }
}
