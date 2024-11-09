<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;

    // Relacion con la tabla categoria
    public function categoria(){
        return $this->hasOne(Categoria::class);
    }

    // Relacion con la tabla marca
    public function marca(){
        return $this->hasOne(Marca::class);
    }

    // Relacion con la tabla presentaciones
    public function presentacione(){
        return $this->hasOne(Presentacione::class);
    }

    protected $fillable=['nombre', 'descripcion'];
}
