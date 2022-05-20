<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\SolicitudController;


Route::post('departamento/solicitud', [SolicitudController::class, 'departamento'])->name('solicitud.storeDepartamento');
Route::resources([
    'departamento' => DepartamentoController::class,
    'equipo' => EquipoController::class,
    'solicitud' => SolicitudController::class,
]);