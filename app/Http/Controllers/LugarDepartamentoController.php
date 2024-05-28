<?php

namespace App\Http\Controllers;

use App\Models\LugarDepartamento;
use Illuminate\Http\Request;

class LugarDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugarDepartamentos = LugarDepartamento::all();
        return view('lugar-departamentos.index', compact('lugarDepartamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar-departamentos.create');
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
            'departamento' => 'required|max:15',
            'cod_pais' => 'required|numeric',
        ]);

        LugarDepartamento::create($validatedData);

        return redirect()->route('lugar-departamentos.index')->with('success', 'Departamento creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LugarDepartamento  $lugarDepartamento
     * @return \Illuminate\Http\Response
     */
    public function show(LugarDepartamento $lugarDepartamento)
    {
        return view('lugar-departamentos.show', compact('lugarDepartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LugarDepartamento  $lugarDepartamento
     * @return \Illuminate\Http\Response
     */
    public function edit(LugarDepartamento $lugarDepartamento)
    {
        return view('lugar-departamentos.edit', compact('lugarDepartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LugarDepartamento  $lugarDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LugarDepartamento $lugarDepartamento)
    {
        $validatedData = $request->validate([
            'departamento' => 'required|max:15',
            'cod_pais' => 'required|numeric',
        ]);

        $lugarDepartamento->update($validatedData);

        return redirect()->route('lugar-departamentos.index')->with('success', 'Departamento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LugarDepartamento  $lugarDepartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(LugarDepartamento $lugarDepartamento)
    {
        $lugarDepartamento->delete();
        return redirect()->route('lugar-departamentos.index')->with('success', 'Departamento eliminado correctamente.');
    }
}