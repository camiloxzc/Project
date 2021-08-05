<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallessolicitudesserviciosproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_solicitudes_servicios_productos', function (Blueprint $table) {
            $table->id('iddetallesolicitudservicioproducto');
            $table->time('horainicio');
            $table->time('horafinal');
            $table->decimal('precio');
            $table->boolean('estado');
            $table->integer('cantidad');
            $table->integer('idservicioproducto');
            $table->integer('idsolicitudservicio');
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
        Schema::dropIfExists('detallessolicitudesserviciosproductos');
    }
}
