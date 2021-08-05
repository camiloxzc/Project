<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_servicios', function (Blueprint $table) {
            $table->id('idsolicitudservicio');
            $table->date('fechasolicitud');
            $table->date('fechaservicio');
            $table->decimal('precio');
            $table->string('modalidad');
            $table->string('direccion');
            $table->integer('idestadoservicio');
            $table->integer('idusuario');
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
        Schema::dropIfExists('solicitudes_servicios');
    }
}
