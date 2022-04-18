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
            $table->string('ciudad');
            $table->integer('factura');
            $table->string('producto');
            $table->string('referencia');
            $table->integer('cantidad');
            $table->string('lote_serial');
            $table->string('marca');
            $table->string('estado');
            $table->text('descripcion_problema');
            $table->text('descripcion_revision')->nullable();
            $table->text('comentario_interno')->nullable();
            $table->string('solucion');
            $table->string('tipo_garantia')->nullable();;
            $table->string('num_documento')->nullable();;
            $table->string('consecutivo_carta')->nullable();;
            $table->text('observaciones')->nullable();;
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
