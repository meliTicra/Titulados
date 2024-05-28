<?php

namespace App\Http\Controllers;

use App\Models\Prs_pais;
use Illuminate\Http\Request;

class PrsPaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prsPaises = Prs_pais::all();
        return view('prs-paises.index', compact('prsPaises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prs-paises.create');
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
            'pais' => 'required|max:255',
            // Agrega las demás reglas de validación para los otros campos
        ]);

        Prs_pais::create($validatedData);

        return redirect()->route('prs-paises.index')->with('success', 'País creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prs_pais  $prsPais
     * @return \Illuminate\Http\Response
     */
    public function show(Prs_pais $prsPais)
    {
        return view('prs-paises.show', compact('prsPais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrsPais  $prsPais
     * @return \Illuminate\Http\Response
     */
    public function edit(Prs_pais $prsPais)
    {
        return view('prs-paises.edit', compact('prsPais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrsPais  $prsPais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prs_pais $prsPais)
    {
        $validatedData = $request->validate([
            'pais' => 'required|max:255',
            // Agrega las demás reglas de validación para los otros campos
        ]);

        $prsPais->update($validatedData);

        return redirect()->route('prs-paises.index')->with('success', 'País actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrsPais  $prsPais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prs_pais $prsPais)
    {
        $prsPais->delete();
        return redirect()->route('prs-paises.index')->with('success', 'País eliminado correctamente.');
    }
}