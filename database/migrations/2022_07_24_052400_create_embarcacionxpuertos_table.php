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
        Schema::create('embarcacionxpuertos', function (Blueprint $table) {
            $table->id();
            //$table->foreign('embarcacion')->references('id')->on('embarcacions')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('puerto')->references('id')->on('puertos')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('embarcacion'); //falsa foreign
            $table->bigInteger('puerto'); //falsa foreign
            $table->date('fecha');
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
        Schema::dropIfExists('embarcacionxpuertos');
    }
};
