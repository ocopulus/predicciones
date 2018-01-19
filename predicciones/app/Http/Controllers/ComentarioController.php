<?php

namespace Prediccion\Http\Controllers;

use Prediccion\Comentario;
use Illuminate\Http\Request;
use Redirect;
class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comentario = new Comentario;
        $comentario->usuario = $request->usuario;
        $comentario->descripcion = $request->comentario;
        $comentario->clima = $request->tipoclima;
        $comentario->save();
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Prediccion\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $comentario = Comentario::All();
        return view('predic.predicciones', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Prediccion\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
        return 'edite';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Prediccion\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Prediccion\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comentario = Comentario::find($id);
        $comentario->delete();
        return Redirect::to('/clima/show');
    }
}
