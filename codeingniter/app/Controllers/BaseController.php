<?php

namespace App\Controllers;
use App\Models\DatosModel;
class General extends BaseController
{
	public function index()
	{
		$model = new DatosModel();
		$mensaje = session('mensaje');
		$datos = $model->listarTodo();
		$data = [
                     "datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('listado',$data);
	}
}
        public function obtenerDatos($id) {
		$model = new DatosModel();
		$data = ["id" => $id];
		$respuesta = $model ->obtenerInformacion($data);
		
		$datos = ["datos" => $respuesta];
		return view('actualizar', $datos);
		
	}
        public function insertar(){
		$model = new DatosModel();
		$data = [
			"nombre" => $_POST ['nombre'],
			"a_paterno" => $_POST ['apaterno'],
			"a_materno" => $_POST ['materno'],
		];
		$respuesta = $model ->insertar($data);
		
		if($respuesta > 0){
			return redirect()->to(base_url('/index.php'))->with('mensaje','0');
		}else{
			return redirect()->to(base_url('/index.php'))->with('mensaje','1');
		}
	}
       



        public function actualizar(){
		$model = new DatosModel();
		$data = [
			"nombre" => $_POST ['nombre'],
			"a_paterno" => $_POST ['paterno'],
			"a_materno" => $_POST ['materno'],
			
			
		];
		$id = ["id" => $_POST['id']];
		$respuesta = $model->actualizar($data,$id);
		
		if($respuesta){
			return redirect()->to(base_url('/index.php'))->with('mensaje','2');
		}else{ 
			return redirect()->to(base_url('/index.php'))->with('mensaje','3');
		}
	}
        public function eliminar($idPersona){
		$model = new DatosModel();
		$id = [ "id" => $idPersona];
		$respuesta = $model->eliminar($id);
		
		if($respuesta){
			return redirect()->to(base_url('/index.php'))->with('mensaje','4');
		}else{
			return redirect()->to(base_url('/index.php'))->with('mensaje','5');
		}
	}
}
