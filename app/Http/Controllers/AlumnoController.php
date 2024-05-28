<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Muestra una lista de todos los alumnos
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    // Muestra el formulario para crear un nuevo alumno
    public function create()
    {
        return view('alumnos.create');
    }

    // Almacena un nuevo alumno en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define las reglas de validación para los campos aquí
        ]);

        Alumno::create($validatedData);

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente.');
    }

    // Muestra un alumno específico
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    // Muestra el formulario para editar un alumno existente
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    // Actualiza un alumno existente en la base de datos
    public function update(Request $request, Alumno $alumno)
    {
        $validatedData = $request->validate([
            // Define las reglas de validación para los campos aquí
        ]);

        $alumno->update($validatedData);

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente.');
    }

    // Elimina un alumno existente de la base de datos
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente.');
    }
}
