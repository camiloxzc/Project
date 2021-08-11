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
        Schema::create('solicitudservicios', function (Blueprint $table) {
            $table->id('idsolicitudservicio');
            $table->date('fechasolicitud');
            $table->date('fechaservicio');
            $table->decimal('precio');
            $table->string('modalidad')->nullable();
            $table->string('direccion');
            $table->integer('idestadoservicio')->nullable();
            $table->integer('idusuario')->nullable();
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
        Schema::dropIfExists('solicitudservicios');
    }
}
