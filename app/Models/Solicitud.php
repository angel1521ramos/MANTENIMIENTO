<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $fillable = [
        'equipo_id',
        'departamento_id',
        'identificador',
        'observacion',
        'tipo',
        'estatus'
    ];

    public function Equipo()
    {
        //una solicitud tiene a un equipo
    	return $this->belongsTo(Equipo::class);
    }
    public function Departamento()
    {
        //una solicitud pertenece a un Departamento
    	return $this->belongsTo(Departamento::class);
    }
}
