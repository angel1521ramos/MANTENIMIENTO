<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'departamento_id',
        'inventario',
        'marca',
        'tipo',
        'dispositivos',
        'estatus'
    ];

    public function Departamento()
    {
        //un equipo pertenece a un departamento
    	return $this->belongsTo(Departamento::class);
    }

    public function Solicitud()
    {
        //un equipo pertenece a muchas solicitudes
    	return $this->hasMany(Solicitud::class);
    }
}
