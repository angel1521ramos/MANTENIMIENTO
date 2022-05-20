<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Departamento;
use App\Http\Requests\Equipo as EquipoRequests;

class EquipoController extends Controller
{

    protected $equipo;
    public function __construct(Equipo $equipo){
        $this->equipo = $equipo;
    }
    
    public function index()
    {
        $equipo = Equipo::all();
        $departamento = Departamento::all();
        return view('templates.content.equipo.index', compact('equipo','departamento'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(EquipoRequests $request)
    {
        $equipo = $this->equipo->create($request->all());
        return $this->index();
    }
    
    public function show($equipo)
    {
        $departamento = Departamento::all();
        $equipo = Equipo::find($equipo);
        return view('templates.content.equipo.show', compact('departamento','equipo'));
    }
    
    public function edit(Equipo $equipo)
    {
        //
    }
    
    public function update(EquipoRequests $request, $equipo)
    {
        $id = $equipo;
        $equipo = Equipo::find($id);
        $equipo->update($request->all());
        return $this->show($id);
    }
    
    public function destroy(Equipo $equipo)
    {
        //
    }
}
