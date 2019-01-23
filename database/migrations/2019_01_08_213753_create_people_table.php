<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni')->unique();
            $table->date('fecha');
            $table->string('email')->unique();
            $table->unsignedInteger('obrasocial_id');//tabla obrasocials
            $table->unsignedInteger('trabajo_id');//tabla trabajos
            $table->unsignedInteger('estudio_id');//tabla estudios
            $table->unsignedInteger('discapacidad_id');//tabla discas
            $table->date('fechadisca')->nullable();
            $table->boolean('adquirida')->nullable();
            $table->string('telefono')->nullable();
            $table->string('status');
            $table->string('avatar')->default('avatars/img_avatar.png');
            $table->timestamps();

            $table->foreign('obrasocial_id')->references('id')->on('obrasocials');
            $table->foreign('trabajo_id')->references('id')->on('trabajos');
            $table->foreign('estudio_id')->references('id')->on('estudios');
            $table->foreign('discapacidad_id')->references('id')->on('discas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
