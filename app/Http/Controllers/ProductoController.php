<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;

class ProductoController extends Controller
{
    public function index($id_subcategoria) {
        $productos = ProductoModel::where('id_subcategoria', $id_subcategoria)->get();
        return view('producto', compact('productos'));
    }
}
