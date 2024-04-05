<?php

namespace App\Http\Controllers;

use App\Models\Registropersonas;
use Illuminate\Http\Request;

class RegistropersonasController
{
    /**
     * Display a listing of the resource.
     */
    public function indexregistro()
    {
        return view('index');
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
    public function storeregistro(Request $request)
    {
        $registro = new Registropersonas();
        $registro->nombre = $request->post('nombre');
        $registro->telefono = $request->post('telefono');
        $registro->apellidos = $request->post('apellidos');
        $registro->usuario = $request->post('usuario');
        $registro->correo = $request->post('correo');
        $registro->password = $request->post('psw');
        $registro->save();
        return redirect()->route("personas.index")->with("success","Agregado con exito!!");


    }

    /**
     * Display the specified resource.
     */
    public function show(Registropersonas $registropersonas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registropersonas $registropersonas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registropersonas $registropersonas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registropersonas $registropersonas)
    {
        //
    }
}
