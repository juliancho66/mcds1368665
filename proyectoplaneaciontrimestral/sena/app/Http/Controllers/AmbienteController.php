<?php

namespace App\Http\Controllers;

use App\Ambiente;
use App\Http\Requests\AmbienteRequest;

class AmbienteController extends Controller
{
     public function index()
    {
        $ambientes = Ambiente::orderby('id', 'DESC')->paginate();
        return view('ambientes.index', compact('ambientes'));
    }

    public function create()
    {
        return view('ambientes.create');
    }

    public function store(AmbienteRequest $request)
    {
        $ambiente = new Ambiente;

        $ambiente->nombre      = $request->nombre;
        $ambiente->estado      = $request->estado;
        $ambiente->descripcion = $request->descripcion;

        $ambiente->save();

        return redirect()->route('ambientes.index')
            ->with('info', 'El ambiente fue Guardado Con Exito');
    }

    public function edit($id)
    {
        $ambiente = Ambiente::find($id);
        return view('ambientes.edit', compact('ambiente'));
    }

    public function update(AmbienteRequest $request, $id)
    {
        $ambiente = Ambiente::find($id);

        $ambiente->nombre      = $request->nombre;
        $ambiente->estado      = $request->estado;
        $ambiente->descripcion = $request->descripcion;
        $ambiente->save();

        return redirect()->route('ambientes.index')
            ->with('info', 'El ambiente fue Actualizado con Exito');
    }

    public function show($id)
    {
        $ambiente = Ambiente::find($id);
        return view('ambientes.show', compact('ambiente'));
    }

    public function destroy($id)
    {
        $ambiente = Ambiente::find($id);
        $ambiente->delete();

        return back()->with('info', 'El ambiente fue Eliminado con Exito');
    }
}
