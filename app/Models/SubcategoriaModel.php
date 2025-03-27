<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcategoriaModel extends Model
{
    protected $table = 'subcategorias';

    protected $primaryKey = 'id_subcategoria';

    protected $fillable = [
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;
}
