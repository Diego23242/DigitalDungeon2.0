<?php

namespace App\Http\Controllers;

use App\Models\Registropersonas;
use App\Models\Sesionpersonas;
use Illuminate\Http\Request;
use App\Http\Controllers\RegistropersonasController;
class SesionpersonasController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Recuperar el usuario por su nombre de usuario
        $usuario = $request->input('usuario');
        $registro = Registropersonas::where('usuario', $usuario)->first();
    
        // Verificar si se encontró un registro con el nombre de usuario proporcionado
        if ($registro) {
            // Si se encontró el usuario, comparar la contraseña
            $password = $request->input('psw'); // Corregir el nombre del campo de contraseña
            if ($password === $registro->password) {
                // Si la contraseña es correcta, el usuario está autenticado correctamente
                // Establecer la sesión del usuario
                auth()->login($registro);
    
                // Redirigir al usuario a la página deseada
                return redirect()->route('personas.index')->with('success', 'Inicio de sesión exitoso');
            } else {
                // Si la contraseña no coincide, mostrar un mensaje de error
                return back()->withInput()->withErrors(['password' => 'La contraseña es incorrecta']);
            }
        } else {
            // Si no se encuentra un registro con el nombre de usuario proporcionado, mostrar un mensaje de error
            return back()->withInput()->withErrors(['usuario' => 'El usuario no existe']);
        }
    }
    public function show(Sesionpersonas $sesionpersonas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesionpersonas $sesionpersonas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesionpersonas $sesionpersonas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesionpersonas $sesionpersonas)
    {
        //
    }
}
