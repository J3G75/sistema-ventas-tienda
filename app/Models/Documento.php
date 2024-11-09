<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    // Relacion con la tabla persona
    public function persona(){
        return $this->hasOne(Persona::class);
    }
}
