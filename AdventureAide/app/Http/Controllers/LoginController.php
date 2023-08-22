<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // Mostrar la vista de login de usuarios
        return view('autentication.login_user');
    }

    //Validar formulario
    public function store(Request $request)
    {
        // dd('Autenticado');
        $this->validate($request, [
            // Reglas de validación
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Verificar que las credenciales sean correctas
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            // Usar la directiva "with" para llenar los valores de la sesión
            // Si las credenciales ingresadas no coinciden con las de la base de datos, retornara el mensaje
            return back()->with('mensaje', 'Credenciales incorrectas');
        }
        // Credenciales correctas
        return redirect()->route('dashboard', auth()->user());
    }

    // Metodo para cerrar sesion
    public function logout()
    {
        // Cerrar sesion
        auth()->logout();
        // Redireccionar a la vista de login
        return redirect()->route('login');
    }
}