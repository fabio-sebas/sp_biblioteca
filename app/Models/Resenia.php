<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resenia extends Model
{
    protected $fillable = ['usuario_id', 'libro_id', 'contenido', 'valoracion', 'fecha_publicacion', 'recomendado'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
