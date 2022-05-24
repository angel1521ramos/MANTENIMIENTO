<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'identificador',
        'nombre',
        'responsable',
        'cargo_responsable',
        'direccion',
        'telefono',
        'correo'
    ];

}
