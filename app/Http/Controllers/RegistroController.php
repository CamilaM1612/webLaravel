<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function registrar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombres' => 'required|string|max:25',
            'apellido_paterno' => 'required|string|max:20',
            'apellido_materno' => 'required|string|max:20',
            'contrasena' => 'required|string|min:20',
            'codigo_sis' => 'required|string|max:10',
        ]);

        // Crear un nuevo usuario
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombres');
        $usuario->ap_paterno = $request->input('apellido_paterno');
        $usuario->ap_materno = $request->input('apellido_materno');
        $usuario->contrasena = bcrypt($request->input('contrasenia')); // Hash de la contraseña
        $usuario->codigo_sis = $request->input('codigo_sis');

        // Guardar el usuario en la base de datos
        $usuario->save();

        // Redireccionar u mostrar algún mensaje de éxito
        return redirect()->back()->with('success', 'Usuario registrado exitosamente.');
    }
}
