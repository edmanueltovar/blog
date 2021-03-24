<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    function arroz(){
        $producto = new Productos();
        return $producto->saludar();
    }
}
