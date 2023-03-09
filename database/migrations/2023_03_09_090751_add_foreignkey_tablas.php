<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
           DB::table('pacientes')->update(['prueba_id' => null]);
           $table->unsignedBigInteger('prueba_id')->change();
            $table->foreign('prueba_id')->references('id')->on('pruebas');
        });

        Schema::table('pruebas', function (Blueprint $table) {
            DB::table('pruebas')->update(['tratamiento_id' => null]);
            $table->unsignedBigInteger('tratamiento_id')->change();

            $table->foreign('tratamiento_id')->references('id')->on('pruebas');
        });
        Schema::table('pedidos', function (Blueprint $table) {
            DB::table('pedidos')->update(['pedido_id' => null]);
            DB::table('pedidos')->update(['tratamiento_id' => null]);
            $table->unsignedBigInteger('pedido_id')->change();
            $table->unsignedBigInteger('tratamiento_id')->change();
            $table->foreign('pedido_id')->references('id')->on('pedido_tipos');
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('pacientes', ['prueba_id']);
        Schema::dropColumns('pruebas', ['tratamiento_id']);
        Schema::dropColumns('pedidos', ['tratamiento_id', 'pedido_id']);
    }
};
