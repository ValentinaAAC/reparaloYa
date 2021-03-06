<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role')->nullable();
            $table->string('name');
            $table->string('rut');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telephone');
            $table->integer('idServicios')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->foreign('idServicios')->references('idServicios')->on('servicios');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * 
     * 
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
