<?php

namespace App\Http\Controllers;

use App\Models\Prs_colegio;
use Illuminate\Http\Request;

class PrsColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prsColegios = Prs_colegio::all();
        return view('prs-colegios.index', compact('prsColegios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prs-colegios.create');
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
            'id_colegio' => 'required|unique:prs_colegios',
            'colegio' => 'required|max:65',
            'tipo' => 'required|max:1',
            'turno' => 'required|max:1',
            'cod_dep' => 'required|numeric',
            'cod_prov' => 'required|numeric',
            'cod_loc' => 'required|numeric',
            'id_pais' => 'required|numeric',
            // Agrega las demás reglas de validación para los otros campos
        ]);

        Prs_colegio::create($validatedData);

        return redirect()->route('prs-colegios.index')->with('success', 'Colegio creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prs_colegio  $prsColegio
     * @return \Illuminate\Http\Response
     */
    public function show(Prs_colegio $prsColegio)
    {
        return view('prs-colegios.show', compact('prsColegio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrsColegio  $prsColegio
     * @return \Illuminate\Http\Response
     */
    public function edit(Prs_colegio $prsColegio)
    {
        return view('prs-colegios.edit', compact('prsColegio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrsColegio  $prsColegio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prs_colegio $prsColegio)
    {
        $validatedData = $request->validate([
            'id_colegio' => 'required|unique:prs_colegios,id_colegio,' . $prsColegio->id_colegio,
            'colegio' => 'required|max:65',
            'tipo' => 'required|max:1',
            'turno' => 'required|max:1',
            'cod_dep' => 'required|numeric',
            'cod_prov' => 'required|numeric',
            'cod_loc' => 'required|numeric',
            'id_pais' => 'required|numeric',
            // Agrega las demás reglas de validación para los otros campos
        ]);

        $prsColegio->update($validatedData);

        return redirect()->route('prs-colegios.index')->with('success', 'Colegio actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrsColegio  $prsColegio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prs_colegio $prsColegio)
    {
        $prsColegio->delete();
        return redirect()->route('prs-colegios.index')->with('success', 'Colegio eliminado correctamente.');
    }
}