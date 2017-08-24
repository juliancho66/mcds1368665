<?php

namespace App\Http\Controllers;

use App\Centro;
use App\Http\Requests\CentroRequest;

class CentroController extends Controller
{
    public function index()
    {
        $centros = Centro::orderby('id', 'DESC')->paginate();
        return view('centros.index', compact('centros'));
    }

    public function create()
    {
        return view('centros.create');
    }

    public function store(CentroRequest $request)
    {
        $centro = new Centro;

        $centro->nombre      = $request->nombre;
        $centro->descripcion = $request->descripcion;

        $centro->save();

        return redirect()->route('centros.index')
            ->with('info', 'El centro fue Guardado Con Exito');
    }

    public function edit($id)
    {
        $centro = Centro::find($id);
        return view('centros.edit', compact('centro'));
    }

    public function update(CentroRequest $request, $id)
    {
        $centro = Centro::find($id);

        $centro->nombre      = $request->nombre;
        $centro->descripcion = $request->descripcion;
        $centro->save();

        return redirect()->route('centros.index')
            ->with('info', 'El centro fue Actualizado con Exito');
    }

    public function show($id)
    {
        $centro = Centro::find($id);
        return view('centros.show', compact('centro'));
    }

    public function destroy($id)
    {
        $centro = Centro::find($id);
        $centro->delete();

        return back()->with('info', 'El centro fue Eliminado con Exito');
    }

}
