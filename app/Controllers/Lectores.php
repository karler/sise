<?php

namespace App\Controllers;

use App\Models\LectoresModel;

class Lectores extends BaseController
{
    protected $modelolectores;

    public function __construct(){
		$this->modelolectores = new LectoresModel();
    }

    public function index($activo=1)
    {
        $resultado = $this->modelolectores->where('Activo',$activo)->findAll();
        $datos = [
            'titulo' => "Tabla Lectores",
            'datos' => $resultado
        ];
        echo view('plantilla/cabecera');
        echo view('lectores/lista',$datos);
        echo view('plantilla/pie');
    }
}  