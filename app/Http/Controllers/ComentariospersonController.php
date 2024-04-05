<?php

namespace App\Http\Controllers;

use App\Models\Comentariosperson;
use Illuminate\Http\Request;

class ComentariospersonController
{
    /**
     * Display a listing of the resource.
     */
    public function indexcomentario()
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
    public function storescomentario(Request $request)
    {
        $comentario = new Comentariosperson();
        $comentario->email = $request->post('email');
        $comentario->comentario = $request->post('comentario');
        $comentario->save();
        return redirect()->route("comentarios.index")->with("success","Agregado con exito!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentariosperson $comentariosperson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentariosperson $comentariosperson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentariosperson $comentariosperson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentariosperson $comentariosperson)
    {
        //
    }
}
