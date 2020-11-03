<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('idSolicitud');
            $table->string('direccion',100);
            $table->integer('idServicios')->unsigned();
            $table->string('problema',500);
            $table->string('imagen');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idServicios')->references('idServicios')->on('servicios');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario');
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
        Schema::dropIfExists('solicitud');
    }
}
