<?php

namespace App\Http\Controllers;

use App\Models\LugarLocalidad;
use Illuminate\Http\Request;

class LugarLocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugarLocalidades = LugarLocalidad::all();
        return view('lugar-localidades.index', compact('lugarLocalidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar-localidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cod_prov' => 'required|numeric',
            'cod_dep' => 'required|numeric',
            'cod_pais' => 'required|numeric',
            'localidad' => 'required|max:200',
        ]);

        LugarLocalidad::create($validatedData);

        return redirect()->route('lugar-localidades.index')->with('success', 'Localidad creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LugarLocalidad  $lugarLocalidad
     * @return \Illuminate\Http\Response
     */
    public function show(LugarLocalidad $lugarLocalidad)
    {
        return view('lugar-localidades.show', compact('lugarLocalidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LugarLocalidad  $lugarLocalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(LugarLocalidad $lugarLocalidad)
    {
        return view('lugar-localidades.edit', compact('lugarLocalidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LugarLocalidad  $lugarLocalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LugarLocalidad $lugarLocalidad)
    {
        $validatedData = $request->validate([
            'cod_prov' => 'required|numeric',
            'cod_dep' => 'required|numeric',
            'cod_pais' => 'required|numeric',
            'localidad' => 'required|max:200',
        ]);

        $lugarLocalidad->update($validatedData);

        return redirect()->route('lugar-localidades.index')->with('success', 'Localidad actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LugarLocalidad  $lugarLocalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(LugarLocalidad $lugarLocalidad)
    {
        $lugarLocalidad->delete();
        return redirect()->route('lugar-localidades.index')->with('success', 'Localidad eliminada correctamente.');
    }
}