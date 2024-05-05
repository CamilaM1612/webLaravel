<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario'; 
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'correo_electronico',
        'codigo_sis',
        'contrasena',
    ];

}
