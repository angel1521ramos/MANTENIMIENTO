<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    public function login(Request $request, Redirector $redirect)
    {
        //guarda en datos la informacion de los inputs con los name email y password
        $datos = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);
        $recordar = $request->filled('recordar');

        //compara los datos recibidos con datos guardados en DB
        if (Auth::attempt($datos, $recordar)) {
            //regeneracion que evita robo de sesion
            $request->session()->regenerate();
            return $redirect->to('/home');
        }
        return $redirect->to('/');
    }

    public function logout(Request $request, Redirector $redirect)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $redirect->to('/');
    }

    
}
