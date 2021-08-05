<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallescomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->id('iddetallecompra');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->integer('idcompra');
            $table->integer('idservicioproducto');
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
        Schema::dropIfExists('detalles_compras');
    }
}
