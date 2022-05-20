<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Departamento;
use App\Models\Equipo;
use App\Http\Requests\Solicitud as SolicitudRequests;

class SolicitudController extends Controller
{

    protected $solicitud;
    public function __construct(Solicitud $solicitud){
        $this->solicitud = $solicitud;
    }

    
    public function index()
    {
        $solicitud = Solicitud::all();
        $equipo = Equipo::orderBy('departamento_id', 'asc')->get();
        $departamento = Departamento::orderBy('id', 'asc')->get();
        return view('templates.content.solicitud.index', compact('departamento','solicitud','equipo'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(SolicitudRequests $request)
    {
        $solicitud = $this->solicitud->create($request->all());
        return $this->index();
    }

    
    public function show($solicitud)
    {
        $departamento = Departamento::all();
        $departamento_id = Solicitud::where('id', $solicitud)->value('departamento_id');
        $equipo = Equipo::where('departamento_id', $departamento_id)->get();
        $solicitud = Solicitud::find($solicitud);
        return view('templates.content.solicitud.show', compact('departamento','equipo','solicitud'));
    }
    
    public function edit(Solicitud $solicitud)
    {
        //
    }
    
    public function update(SolicitudRequests $request, $solicitud)
    {
        $id = $solicitud;
        $solicitud = Solicitud::find($id);
        $solicitud->update($request->all());
        return $this->show($id);
    }
    
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
