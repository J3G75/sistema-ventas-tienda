<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;

    // Relacion con la tabla persona
    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    // Relacion con la tabla compras
    public function compras(){
        return $this->hasMany(Compra::class);
    }
}
