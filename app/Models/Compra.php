<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    // Relacion con la tabla de proveedores
    public function proveedore(){
        return $this->belongsTo(Proveedore::class);
    }

    // Relacion con la tabla comprobante
    public function comprobante(){
        return $this->belongsTo(Comprobante::class);
    }

    // Relacion muchos a muchos tabla intermedia compra_producto
    public function producto(){
        return $this->belongsToMany(Producto::class)->withTimestamps()->wherePivot('cantidad','precio_compra','precio_venta');
    }
}
