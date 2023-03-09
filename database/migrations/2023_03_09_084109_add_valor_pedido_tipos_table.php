<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\PedidoTipos::upsert([
            ['id' => 1, 'nombre' => 'Ordinario'],
            ['id' => 2, 'nombre' => 'Urgente'],
        ], ['id']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \App\Models\PedidoTipos::whereIn('id', [1, 2])->delete();
    }
};
