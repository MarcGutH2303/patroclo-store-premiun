<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubcategoriaModel;

class SubcategoriaController extends Controller
{
    public function index($id_categoria) {
        $subcategorias = SubcategoriaModel::where('id_categoria', $id_categoria)->get();
        return view('subcategoria', compact('subcategorias'));
    }
}
