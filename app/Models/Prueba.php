<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = 'pruebas';

    protected $fillable = [
        "id",
        "nombre",
        "dosis_farmaco",
        "tratamiento_id"
    ];
}
