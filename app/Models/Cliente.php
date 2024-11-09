<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Relacion con la tabla personas
    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    // Relacion con la tabla ventas
    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}
