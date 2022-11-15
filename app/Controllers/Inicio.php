<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function __constructor(){
        helper(array('url'));
    }
    
    public function index()
    {
        echo view('plantilla/cabecera');
        echo view('plantilla/contenido');
        echo view('plantilla/pie');
    }
}