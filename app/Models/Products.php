<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
        //Tabla productos
        protected $fillable = [
            'name', 
            'descripcion_corta',
            'descripcion_larga',
            'precio_venta',
            'precio_compra',
            'stock',
            'peso',
        ];
}
