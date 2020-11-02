<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleSolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_sol', function (Blueprint $table) {
            $table->increments('idDetalle');
            $table->string('descripcion',500);
            $table->string('foto');
            $table->integer('idSolicitud')->unsigned();
            $table->foreign('idSolicitud')->references('idSolicitud')->on('solicitud');
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
        Schema::dropIfExists('detalle_sol');
    }
}
