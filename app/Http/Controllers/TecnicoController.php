<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Tecnico;
use App\Models\Solicitud;
use App\Http\Requests\Tecnico as TecnicoRequests;
use App\Models\Equipo;

class TecnicoController extends Controller
{

    protected $tecnico;
    public function __construct(Tecnico $tecnico){
        $this->tecnico = $tecnico;
    }

    public function index()
    {
        $tecnico = Tecnico::all();
        return view('templates.content.administrador.tecnicos.index', compact('tecnico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TecnicoRequests $request)
    {
        $this->tecnico->create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show($tecnico)
    {
        $solicitud = Solicitud::where('tecnico_id', $tecnico)->orderBy('estatus', 'desc')->get();
        $departamento = Departamento::all();
        $equipo = Equipo::all();
        $tecnico = Tecnico::find($tecnico);
        return view('templates.content.administrador.tecnicos.show', compact('tecnico','solicitud','departamento','equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnico $tecnico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(TecnicoRequests $request, Tecnico $tecnico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnico $tecnico)
    {
        //
    }
}
