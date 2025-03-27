<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;

class ProductoDetalleController extends Controller
{
    public function index($id_producto) {
        $producto = ProductoModel::where('id_producto', $id_producto)->get();
        //$producto = ProductoModel::find('id_producto');
        //$marca = $producto[0]->marca->nombre;
        return view('producto-detalle', compact('producto'));
    }
}
