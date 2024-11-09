<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Relacion muchos a muchos tabla intermedia categorias-producto
    public function producto(){
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }

    // Relacion con la tabla caracteristicas
    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);
    }

    protected $fillable=['caracteristica_id'];
}
