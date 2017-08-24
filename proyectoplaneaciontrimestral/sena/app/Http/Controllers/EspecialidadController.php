<?php

namespace App\Http\Controllers;

use App\Especialidad;
use App\Http\Requests\EspecialidadRequest;

class EspecialidadController extends Controller
{
	  public function index()
    {
        $especialidads = Especialidad::orderby('id', 'DESC')->paginate();
        return view('especialidads.index', compact('especialidads'));
    }

    public function create()
    {
        return view('especialidads.create');
    }

    public function store(EspecialidadRequest $request)
    {
        $especialidad = new Especialidad;

        $especialidad->nombre      = $request->nombre;
        $especialidad->descripcion = $request->descripcion;

        $especialidad->save();

        return redirect()->route('especialidads.index')
            ->with('info', 'La Especialdiad fue Guardada Con Exito');
    }

    public function edit($id)
    {
        $especialidad = Especialidad::find($id);
        return view('especialidads.edit', compact('especialidad'));
    }

    public function update(EspecialidadRequest $request, $id)
    {
        $especialidad = Especialidad::find($id);

        $especialidad->nombre      = $request->nombre;
        $especialidad->descripcion = $request->descripcion;
        $especialidad->save();

        return redirect()->route('especialidads.index')
            ->with('info', 'la Especialdad fue Actualizado con Exito');
    }

    public function show($id)
    {
        $especialidad = Especialidad::find($id);
        return view('especialidads.show', compact('especialidad'));
    }

    public function destroy($id)
    {
        $especialidad = Especialidad::find($id);
        $especialidad->delete();

        return back()->with('info', 'La Especialidad fue Eliminado con Exito');
    }
   




}
