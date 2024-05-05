<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        return view('admin.carrera', ['carreras' => $carreras]);
    }

    public function registrarCarrera(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'codigoCarrera' => 'required|numeric',
            'nombreCarrera' => 'required|string',
        ]);

        $carrera = new Carrera();
        $carrera->CODIGOCARRERA = $request->codigoCarrera;
        $carrera->NOMBRECARRERA = $request->nombreCarrera;
        try {
            $carrera->save();
            return redirect()->back()->with('success', 'Carrera registrada correctamente.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Error al registrar la carrera: ' . $e->getMessage()]);
        }
        
    }

    

}

