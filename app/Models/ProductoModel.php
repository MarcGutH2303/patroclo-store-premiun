<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'imagen_url'
    ];

    public function marca()
    {
        return $this->belongsTo(MarcaModel::class, 'id_marca');
    }

    public function subcategoria()
    {
        return $this->belongsTo(SubcategoriaModel::class, 'id_subcategoria');
    }

    public $timestamps = false;
}
