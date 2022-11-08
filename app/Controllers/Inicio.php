<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function __constructor(){
        helper(array('url'));
    }
    
    public function index()
    {
        return view('plantilla/data');
    }
}