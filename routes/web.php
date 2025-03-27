<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CategoriaController,
    SubcategoriaController,
    ProductoController,
    ProductoDetalleController,
};

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/subcategoria/{id_categoria}', [SubcategoriaController::class,'index'])->name('subcategoria.index');

Route::get('/producto/{id_subcategoria}', [ProductoController::class,'index'])->name('producto.index');

Route::get('/producto-detalle/{id_producto}', [ProductoDetalleController::class,'index'])->name('producto-detalle.index');
