<?php

namespace App\Http\Controllers;

use App\Models\Plano; 
use Illuminate\Http\Request;

class PlanosController extends Controller
{
    /**
     * Mostrar todos los planos
     */
    public function getPlanos()
    {
        // Consultamos todos los planos
        $planos = Plano::all();

        // Retornamos la vista con los datos
       return view('planos')->with('planos', $planos);

    }

    /**
     * Guardar un nuevo plano
     */
  public function store(Request $request)
{
    try {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
            'fecha_creacion' => 'required|date',
            'archivo' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ]);

        $path = $request->file('archivo')->store('planos', 'public');

        $plano = Plano::create([
            'idProyecto' => 1,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha_creacion' => $request->fecha_creacion,
            'hoja' => $path,
        ]);

        return redirect()->route('planos')->with('success', 'Plano agregado correctamente. ID: ' . $plano->idPlano);

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
    }
}


}
