<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function show($codigoCarrera)
    {
        $carrera = Carrera::where('CODIGOCARRERA', $codigoCarrera)->firstOrFail();
        $materias = $carrera->materias; // Recupera las materias asociadas a la carrera
        return view('admin.materia', ['carrera' => $carrera, 'materias' => $materias]);
    }

    public function uploadCsv(Request $request)
    {
        // Validar que se haya subido un archivo CSV
        $request->validate([
            'csv_materia' => 'required|mimes:csv,txt',
        ]);

        // Obtener el archivo CSV subido
        $file = $request->file('csv_materia');

        // Leer el archivo CSV y procesar los datos
        $data = array_map(function($line) {
            return str_getcsv($line, ';');
        }, file($file));
        
        // Eliminar el encabezado (primera fila) del array de datos
$header = array_shift($data);

        // Iterar sobre los datos y crear registros en la tabla
        foreach ($data as $row) {
            Materia::create([
                'CODIGOMATERIA' => $row[1],
                'CODIGOCARRERA' => $request->input('codigoCarrera'), // Obtener el código de carrera del formulario
                'NIVEL' => $row[0],
                'NOMBREMATERIA' => $row[2],
                // Agrega aquí más columnas según sea necesario
            ]);
        }

        // Redirigir de vuelta con un mensaje de éxito
        return back()->with('success', 'Datos del CSV importados correctamente.');
    }
}
