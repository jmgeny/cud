<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->mediumText('descripcion');
            $table->unsignedInteger('tipo_id');

            $table->foreign('tipo_id')->references('id')->on('tipodiscas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discas');
    }
}
