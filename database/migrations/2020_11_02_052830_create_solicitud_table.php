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
            $table->date('fecha');
            $table->string('estado',20);
            $table->integer('idServicios')->unsigned();
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
