<?php
namespace App\Traits;
use App\Modelos\Producto;
use App\Modelos\Usuario;

trait SubirImagen {
	public function subirImagen($modelo) {
		if (isset($_FILES['foto'])) {
			if ($_FILES['foto']['error'] === UPLOAD_ERR_OK){
				$name = $_FILES['foto']["name"];
				$origen = $_FILES['foto']["tmp_name"];
				$ext = pathinfo($name, PATHINFO_EXTENSION);
				// var_dump($ext); die;
				$nombre = time() . '.' . $ext;
				if ($modelo instanceof Producto){
					$destino =  "img/productos/{$nombre}";
				} else if ($modelo instanceof Usuario) {
					$destino =  "img/usuarios/{$nombre}";
				}
				move_uploaded_file($origen, '../' . $destino);
				return $destino;
			} else return NULL;
		} else return NULL;
	}
}
