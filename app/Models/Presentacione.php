<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacione extends Model
{
    use HasFactory;

    // Relacion con la tabla productos
    public function productos(){
        return $this->hasMany(Producto::class);
        
    }

    // Relacion con la tabla caracteristicas
    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);
    }
    
}
