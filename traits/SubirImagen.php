<?php 
namespace App\Traits;

trait SubirImagen {
	public function subirImagen() {
		if ($_FILES['foto']['error'] === UPLOAD_ERR_OK){
			$name = $_FILES['foto']["name"];
			$origen = $_FILES['foto']["tmp_name"];
			$ext = pathinfo($name, PATHINFO_EXTENSION);
			// var_dump($ext); die;
			$nombre = time() . '.' . $ext;
			$destino = "img/productos/{$nombre}";
			move_uploaded_file($origen, '../' . $destino);
			return $destino;
		}
	}
}