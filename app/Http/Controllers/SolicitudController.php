<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Departamento;
use App\Models\Equipo;
use App\Http\Requests\Solicitud as SolicitudRequests;
use Barryvdh\DomPDF\Facade\PDF;

class SolicitudController extends Controller
{

    protected $solicitud;
    public function __construct(Solicitud $solicitud){
        $this->solicitud = $solicitud;
    }

    public function index()
    {
        if (request()->is('solicitud/index/mantenimiento')) {
            $solicitud = Solicitud::where('tipo', 'MANTENIMIENTO')->orderBy('estatus', 'desc')->get();
        } elseif (request()->is('solicitud/index/peticion')) {
            $solicitud = Solicitud::where('tipo', 'PETICION')->orderBy('estatus', 'desc')->get();
        }elseif (request()->is('solicitud/index/baja')) {
            $solicitud = Solicitud::where('tipo', 'BAJA')->orderBy('estatus', 'desc')->get();
        }else {
            $solicitud = Solicitud::orderBy('estatus', 'desc')->get();
        }

        $equipo = Equipo::orderBy('departamento_id', 'asc')->get();
        $departamento = Departamento::orderBy('id', 'asc')->get();
        
        return view('templates.content.solicitud.index', compact('departamento','solicitud','equipo'));
    }
    
    public function store(SolicitudRequests $request)
    {
        
        $departamento_id = Equipo::where('id', $request->equipo_id)->value('departamento_id');
        $departamento = Departamento::find($departamento_id);

        $Solicitud = Solicitud::create([
            'equipo_id' => $request->equipo_id,
            'departamento_id' => $departamento_id,
            'identificador' => $request->identificador,
            'observacion' => $request->observacion,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
        ]);

        if ($request->tipo == 'BAJA' && $request->estatus == 'FINALIZADO') {
            Equipo::where('id', $request->equipo_id)->update([
                'estatus' => 'BAJA'
            ]);
        }else {
            Equipo::where('id', $request->equipo_id)->update([
                'estatus' => 'ACTIVO'
            ]);
        }

        Solicitud::where('id', $Solicitud->id)->update(['identificador' => $departamento->identificador.' - '.$Solicitud->id]);
        
        return back();
    }
    
    public function peticion_store(SolicitudRequests $request)
    {
        $departamento = Departamento::find($request->departamento_id);

        $Solicitud = Solicitud::create([
            'departamento_id' => $request->departamento_id,
            'identificador' => $request->identificador,
            'observacion' => $request->observacion,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
            'peticion_equipo' => $request->peticion_equipo,
        ]);

        Solicitud::where('id', $Solicitud->id)->update(['identificador' => $departamento->identificador.' - '.$Solicitud->id]);
        
        return back();
    }
    
    public function show($solicitud)
    {

        $departamento = Departamento::all();
        $departamento_id = Solicitud::where('id', $solicitud)->value('departamento_id');
        $equipo = Equipo::where('departamento_id', $departamento_id)->get();
        $solicitud = Solicitud::find($solicitud);
        return view('templates.content.solicitud.show', compact('departamento','equipo','solicitud'));
        
    }
    
    public function update(SolicitudRequests $request, $solicitud)
    {
        Solicitud::where('id', $solicitud)->update([
            'identificador' => $request->identificador,
            'equipo_id' => $request->equipo_id,
            'departamento_id' => $request->departamento_id,
            'observacion' => $request->observacion,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus,
        ]);

        if ($request->tipo == 'BAJA' && $request->estatus == 'FINALIZADO') {
            Equipo::where('id', $request->equipo_id)->update([
                'estatus' => 'BAJA'
            ]);
        }else {
            Equipo::where('id', $request->equipo_id)->update([
                'estatus' => 'ACTIVO'
            ]);
        }

        return $this->show($solicitud);
    }
    
    public function peticion_update(SolicitudRequests $request, $solicitud)
    {
        Solicitud::where('id', $solicitud)->update([
            'identificador' => $request->identificador,
            'peticion_equipo' => $request->peticion_equipo,
            'departamento_id' => $request->departamento_id,
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

    public function pdf_mantenimiento()
    {
        $pdf = PDF::loadView('templates.content.solicitud.pdf');
        return $pdf->stream();
        /**$pdf = PDF::loadView('templates.content.solicitud.pdf');
        return $pdf->stream();**/
    }
}
