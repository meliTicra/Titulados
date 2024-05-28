<?php

namespace App\Http\Controllers;


use App\Models\graduados_titulado; // Cambiar GraduadosTitulado a graduados_titulado
use Illuminate\Http\Request;

class GraduadosTituladoController extends Controller
{
    public function index()
    {
        $graduadosTitulados = graduados_titulado::all();
        return view('graduados-titulados.index', compact('graduadosTitulados'));
    }

    public function create()
    {
        return view('graduados-titulados.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define las reglas de validación para los campos aquí
        ]);

        graduados_titulado::create($validatedData);

        return redirect()->route('graduados-titulados.index')->with('success', 'Graduado titulado creado correctamente.');
    }

    public function show(graduados_titulado $graduadosTitulado)
    {
        return view('graduados-titulados.show', compact('graduadosTitulado'));
    }

    public function edit(graduados_titulado $graduadosTitulado)
    {
        return view('graduados-titulados.edit', compact('graduadosTitulado'));
    }

    public function update(Request $request, graduados_titulado $graduadosTitulado)
    {
        $validatedData = $request->validate([
            // Define las reglas de validación para los campos aquí
        ]);

        $graduadosTitulado->update($validatedData);

        return redirect()->route('graduados-titulados.index')->with('success', 'Graduado titulado actualizado correctamente.');
    }

    public function destroy(graduados_titulado $graduadosTitulado)
    {
        $graduadosTitulado->delete();
        return redirect()->route('graduados-titulados.index')->with('success', 'Graduado titulado eliminado correctamente.');
    }
}
