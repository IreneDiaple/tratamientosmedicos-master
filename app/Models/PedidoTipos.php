<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoTipos extends Model
{
    use HasFactory;
    protected $table = 'pedido_tipos';

    protected $fillable = [
        "id",
        "nombre",
    ];
}
