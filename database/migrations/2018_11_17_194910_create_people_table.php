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
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('mail')->nullable();
            $table->integer('dni')->nullable();
            $table->date('nacimiento')->nullable();
            $table->date('fechaDisc')->nullable();
            $table->string('direccion')->nullable();
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('dicapaciadad_id');
            $table->string('phone')->nullable();
            $table->string('avatar');
            // default('avatars/default.gif');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('dicapaciadad_id')->references('id')->on('discapacidads');
            $table->foreign('city_id')->references('id')->on('cities');
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
