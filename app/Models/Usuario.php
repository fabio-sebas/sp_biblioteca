<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'tipo'];

    public function librosReservados()
    {
        return $this->hasMany(LibroReservado::class);
    }

    public function resenias()
    {
        return $this->hasMany(Resenia::class);
    }
}
