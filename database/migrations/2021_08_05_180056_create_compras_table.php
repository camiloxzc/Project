<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('idcompra');
            $table->date('fecha')->nullable();
            $table->decimal('preciototal')->nullable();
            $table->float('iva')->nullable();
            $table->string('numerofactura')->nullable();
            $table->string('urlimagen')->nullable();
            $table->integer('idproveedor')->nullable();
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
        Schema::dropIfExists('compras');
    }
}
