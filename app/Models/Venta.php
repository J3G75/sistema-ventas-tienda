<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    // Relacion con la tabla clientes
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

        // Relacion con la tabla users
        public function user(){
            return $this->belongsTo(User::class);
        }

        // Relacion con la tabla comprobante
        public function comprobante(){
            return $this->belongsTo(Comprobante::class);
        } 
        
    // Relacion muchos a muchos tabla intermedia ventas_producto
    public function producto(){
        return $this->belongsToMany(Producto::class)->withTimestamps()->wherePivot('cantidad','precio_venta','descuento');
    }
}
