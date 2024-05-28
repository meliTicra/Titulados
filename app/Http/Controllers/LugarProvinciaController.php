<?php

namespace App\Http\Controllers;

use App\Models\LugarProvincia;
use Illuminate\Http\Request;

class LugarProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugarProvincias = LugarProvincia::all();
        return view('lugar-provincias.index', compact('lugarProvincias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar-provincias.create');
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
            'cod_dep' => 'required|numeric',
            'cod_prov' => 'required|numeric',
            'provincia' => 'required|max:40',
            'cod_pais' => 'required|numeric',
        ]);

        LugarProvincia::create($validatedData);

        return redirect()->route('lugar-provincias.index')->with('success', 'Provincia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LugarProvincia  $lugarProvincia
     * @return \Illuminate\Http\Response
     */
    public function show(LugarProvincia $lugarProvincia)
    {
        return view('lugar-provincias.show', compact('lugarProvincia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LugarProvincia  $lugarProvincia
     * @return \Illuminate\Http\Response
     */
    public function edit(LugarProvincia $lugarProvincia)
    {
        return view('lugar-provincias.edit', compact('lugarProvincia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LugarProvincia  $lugarProvincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LugarProvincia $lugarProvincia)
    {
        $validatedData = $request->validate([
            'cod_dep' => 'required|numeric',
            'cod_prov' => 'required|numeric',
            'provincia' => 'required|max:40',
            'cod_pais' => 'required|numeric',
        ]);

        $lugarProvincia->update($validatedData);

        return redirect()->route('lugar-provincias.index')->with('success', 'Provincia actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LugarProvincia  $lugarProvincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(LugarProvincia $lugarProvincia)
    {
        $lugarProvincia->delete();
        return redirect()->route('lugar-provincias.index')->with('success', 'Provincia eliminada correctamente.');
    }
}