<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        "id",
        "nombre",
        "apellidos",
        "prestacion",
        "hora_cita",
        "prueba_id"
    ];
}
