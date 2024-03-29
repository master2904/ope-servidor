<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'codigo',
        'id_tipo',
        'descripcion',
        'cantidad',
        'precio_compra',
        'precio_venta',
        'stock_minimo',
    ];
}
