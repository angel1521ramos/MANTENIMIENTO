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
        $solicitud = Solicitud::orderBy('estatus', 'desc')->get();
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
        
        $departamento_id = Equipo::where('id', $request->get('equipo_id'))->value('departamento_id');
        $departamento = Departamento::find($departamento_id);

        $Solicitud = Solicitud::create([
            'equipo_id' => $request->equipo_id,
            'departamento_id' => $departamento_id,
            'identificador' => $request->identificador,
            'observacion' => $request->observacion,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
        ]);

        Solicitud::where('id', $Solicitud->id)->update(['identificador' => $departamento->identificador.' - '.$Solicitud->id]);
        
        return $this->index();
    }
    
    public function departamento(SolicitudRequests $request)
    {
        
        $departamento_id = Equipo::where('id', $request->get('equipo_id'))->value('departamento_id');
        $departamento = Departamento::find($departamento_id);

        $Solicitud = Solicitud::create([
            'equipo_id' => $request->equipo_id,
            'departamento_id' => $departamento_id,
            'identificador' => $request->identificador,
            'observacion' => $request->observacion,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
        ]);

        Solicitud::where('id', $Solicitud->id)->update(['identificador' => $departamento->identificador.' - '.$Solicitud->id]);
        
        return redirect(route('departamento.show', $departamento_id));
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
        Solicitud::where('id', $solicitud)->update([
            'equipo_id' => $request->equipo_id,
            'departamento_id' => $request->departamento_id,
            'identificador' => $request->identificador,
            'observacion' => $request->observacion,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
        ]);

        return $this->show($solicitud);
    }
    
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
