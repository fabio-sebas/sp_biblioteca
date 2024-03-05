<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['titulo', 'autor_id', 'categoria_id', 'isbn', 'editorial', 'estado'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function resenias()
    {
        return $this->hasMany(Resenia::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
