<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarcacions', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('nombre');
            $table->string('color');
            $table->float('largo')->nullable();
            $table->float('ancho')->nullable();
            $table->integer('carga_max')->nullable();
            //$table->foreign('tipo_embarcacion')->references('id')->on('tipo_embarcacions')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('tipo_embarcacion'); //falsa foreign
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
        Schema::dropIfExists('embarcacions');
    }
};
