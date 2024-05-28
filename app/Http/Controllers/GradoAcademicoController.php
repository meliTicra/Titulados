<?php

namespace App\Http\Controllers;

use App\Models\grado_academico;
use Illuminate\Http\Request;

class GradoAcademicoController extends Controller
{
    // Muestra una lista de todos los grados académicos
    public function index()
    {
        $gradosAcademicos = grado_academico::all();
        return view('grado-academico.index', compact('gradosAcademicos'));
    }

    // Muestra el formulario para crear un nuevo grado académico
    public function create()
    {
        return view('grado-academico.create');
    }

    // Almacena un nuevo grado académico en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Aquí define las reglas de validación para los campos
        ]);

        grado_academico::create($validatedData);

        return redirect()->route('grado-academico.index')->with('success', 'Grado académico creado correctamente.');
    }

    // Muestra un grado académico específico
    public function show(grado_academico $gradoAcademico)
    {
        return view('grado-academico.show', compact('gradoAcademico'));
    }

    // Muestra el formulario para editar un grado académico existente
    public function edit(grado_academico $gradoAcademico)
    {
        return view('grado-academico.edit', compact('gradoAcademico'));
    }

    // Actualiza un grado académico existente en la base de datos
    public function update(Request $request, grado_academico $gradoAcademico)
    {
        $validatedData = $request->validate([
            // Aquí define las reglas de validación para los campos
        ]);

        $gradoAcademico->update($validatedData);

        return redirect()->route('grado-academico.index')->with('success', 'Grado académico actualizado correctamente.');
    }

    // Elimina un grado académico existente de la base de datos
    public function destroy(grado_academico $gradoAcademico)
    {
        $gradoAcademico->delete();
        return redirect()->route('grado-academico.index')->with('success', 'Grado académico eliminado correctamente.');
    }
}
