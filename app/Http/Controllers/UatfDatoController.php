<?php

namespace App\Http\Controllers;

use App\Models\Uatf_dato;
use Illuminate\Http\Request;

class UatfDatoController extends Controller
{
    /**
     * Display a listing of the resources
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uatfDatos = Uatf_dato::all();
        return view('uatf-datos.index', compact('uatfDatos'));
    }

    // Otros métodos del controlador


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uatf-datos.create');
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
            'id_ra' => 'required|max:10|unique:uatf_datos',
            // Agrega las demás reglas de validación para los otros campos
        ]);

        Uatf_dato::create($validatedData);

        return redirect()->route('uatf-datos.index')->with('success', 'Dato creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UatfDato  $uatfDato
     * @return \Illuminate\Http\Response
     */
    public function show(Uatf_dato $uatfDato)
    {
        return view('uatf-datos.show', compact('uatfDato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UatfDato  $uatfDato
     * @return \Illuminate\Http\Response
     */
    public function edit(Uatf_dato $uatfDato)
    {
        return view('uatf-datos.edit', compact('uatfDato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UatfDato  $uatfDato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uatf_dato $uatfDato)
    {
        $validatedData = $request->validate([
            'id_ra' => 'required|max:10|unique:uatf_datos,id_ra,' . $uatfDato->id_ra,
            // Agrega las demás reglas de validación para los otros campos
        ]);

        $uatfDato->update($validatedData);

        return redirect()->route('uatf-datos.index')->with('success', 'Dato actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uatf_dato  $uatfDato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uatf_dato $uatfDato)
    {
        $uatfDato->delete();
        return redirect()->route('uatf-datos.index')->with('success', 'Dato eliminado correctamente.');
    }
}