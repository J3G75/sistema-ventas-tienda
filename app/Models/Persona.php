<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Relacion con la tabla documento
    public function documento(){
        return $this->belongsTo(Documento::class);
    }

    // Relacion con la tabla proveedores
    public function proveedore(){
        return $this->hasOne(Proveedore::class);
    }

    // Relacion con la tabla clientes
    public function cliente(){
        return $this->hasOne(Cliente::class);
    }


}
