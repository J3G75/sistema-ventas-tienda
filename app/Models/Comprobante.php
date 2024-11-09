<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    // Relacion con la tabla compra
    public function compras(){
        return $this->hasMany(Compra::class);
    }

        // Relacion con la tabla ventas
        public function ventas(){
            return $this->hasMany(Venta::class);
        }
}
