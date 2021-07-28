<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviciosproductos', function (Blueprint $table) {
            $table->id('idservicioproducto');
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio');
            $table->string('cantidad');
            $table->boolean('estado');
            $table->string('idcategoria');
            $table->string('iddetalleserviciousuario');
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
        Schema::dropIfExists('serviciosproductos');
    }
}
