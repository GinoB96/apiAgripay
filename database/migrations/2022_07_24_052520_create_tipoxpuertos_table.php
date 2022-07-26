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
        Schema::create('tipoxpuertos', function (Blueprint $table) {
            $table->id();
            //$table->foreign('puerto')->references('id')->on('puertos')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('tipo_embarcacion')->references('id')->on('tipo_embarcacions')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('puerto'); //falsa foreign
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
        Schema::dropIfExists('tipoxpuertos');
    }
};
