<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarcaModel extends Model
{
    protected $table = 'marcas';

    protected $primaryKey = 'id_marca';

    public function productos()
    {
        return $this->hasMany(ProductoModel::class, 'id_producto');
    }
}
