<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Departamento as DepartamentoRequests;
use Illuminate\Routing\Redirector;
use App\Models\Departamento;
use App\Models\user;
use App\Models\Codigo;

class LoginController extends Controller
{
    protected $departamento;
    public function __construct(Departamento $departamento)
    {
        $this->departamento = $departamento;
    }


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


    public function signup(DepartamentoRequests $request)
    {
        $codigo = Codigo::where('correo', $request->correo)->value('codigo');
        if ($codigo == $request->codigo) {
            
            $this->departamento->create($request->all());
            $rol = 'departamento';
            $user = user::create([
                'name' => $request->nombre,
                'email' => $request->correo,
                'rol' => $rol,
                'password' => bcrypt($request->password),
            ]);
            return redirect(route('login.view'));
        }
        return back();
    }
}
