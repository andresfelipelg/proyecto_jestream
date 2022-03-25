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
            $table->date('created_at');
            $table->date('created_at')->nullable();
            $table->string('cliente');
            $table->string('comercial');
            $table->text('description_cliente');
            $table->text('description_cliente');
            $table->text('description_cliente');
            $table->text('description_laumayer');
            $table->string('aplica_garantia');
            $table->string('tipo_garantia');
            $table->string('garantia_autorizado');
            $table->string('fecha_salida');
            $table->string('num_documento');
            $table->string('consecutivo_carta');
            $table->string('observaciones');
            $table->string('estado');
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
