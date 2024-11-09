<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Relacion muchos a muchos tabla intermedia compra_producto
    public function compras(){
        return $this->belongsToMany(Compra::class)->withTimestamps()->wherePivot('cantidad','precio_compra','precio_venta');
    }    

    // Relacion muchos a muchos tabla intermedia ventas_producto
    public function ventas(){
        return $this->belongsToMany(Venta::class)->withTimestamps()->wherePivot('cantidad','precio_venta','descuento');
    } 

    // Relacion muchos a muchos tabla intermedia categorias-producto
    public function categorias(){
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }

    // Relacion con la tabla marcas
    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    // Relacion con la tabla presentacion
    public function presentacione(){
        return $this->belongsTo(Presentacione::class);
    }

}
