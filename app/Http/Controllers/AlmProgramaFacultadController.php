<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\academico\AlmProgramaFacultad;


class AlmProgramaFacultadController extends Controller
{
    
    /**
     * Muestra una lista de todas las facultades.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = AlmProgramaFacultad::all();
        return view('facultades.index', ['facultades' => $facultades]);
    }

    /**
     * Muestra el formulario para crear una nueva facultad.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facultades.create');
    }

    /**
     * Almacena una nueva facultad en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'facultad' => 'required|string|max:255'
        ]);

        AlmProgramaFacultad::create($request->all());

        return redirect()->route('facultades.index')
                         ->with('success', 'Facultad creada exitosamente.');
    }

    /**
     * Muestra los detalles de una facultad específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultad = AlmProgramaFacultad::findOrFail($id);
        return view('facultades.show', ['facultad' => $facultad]);
    }

    /**
     * Muestra el formulario para editar una facultad existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultad = AlmProgramaFacultad::findOrFail($id);
        return view('facultades.edit', ['facultad' => $facultad]);
    }

    /**
     * Actualiza una facultad existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'facultad' => 'required|string|max:255'
        ]);

        $facultad = AlmProgramaFacultad::findOrFail($id);
        $facultad->update($request->all());

        return redirect()->route('facultades.index')
                         ->with('success', 'Facultad actualizada exitosamente.');
    }

    /**
     * Elimina una facultad específica de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facultad = AlmProgramaFacultad::findOrFail($id);
        $facultad->delete();

        return redirect()->route('facultades.index')
                         ->with('success', 'Facultad eliminada exitosamente.');
    }
}