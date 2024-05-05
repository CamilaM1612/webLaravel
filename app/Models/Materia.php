<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    
        use HasFactory;
    
        protected $table = 'materia'; // Nombre de la tabla en la base de datos
    
        protected $primaryKey = 'CODIGOMATERIA';

        protected $fillable = [
            'CODIGOMATERIA',
            'CODIGOCARRERA',
            'NIVEL',
            'NOMBREMATERIA',
        ];    

        public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'CODIGOCARRERA', 'CODIGOCARRERA');
    }
}
