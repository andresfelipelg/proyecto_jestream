<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ingreso');
            $table->date('fecha_respuesta')->nullable();
            $table->string('cliente');
            $table->string('comercial');
            $table->integer('factura');
            $table->string('producto');
            $table->integer('cantidad');
            $table->string('lote_serial');
            $table->string('marca');
            $table->string('estado');
            $table->text('descripcion_problema');
            $table->text('descripcion_revision');
            $table->string('solucion');
            $table->string('tipo_garantia');
            $table->string('num_documento');
            $table->string('consecutivo_carta');
            $table->text('observaciones');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamos');
    }
}
