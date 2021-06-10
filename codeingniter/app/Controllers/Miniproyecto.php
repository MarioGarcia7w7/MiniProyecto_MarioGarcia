<?php

namespace App\Controllers;
use App\Models\DatosModel;

class Miniproyecto extends BaseController
{
	public function index()
	{
		$model = new DatosModel();
		$datos = $model->listar();
		$data = [
			
			"datos" => $datos 
		]
		return view('listado',$data);
	}
