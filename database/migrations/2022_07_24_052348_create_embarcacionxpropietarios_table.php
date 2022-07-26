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
        Schema::create('embarcacionxpropietarios', function (Blueprint $table) {
            $table->id();
            //$table->foreign('propietario')->references('id')->on('propietarios')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('embarcacion')->references('id')->on('embarcacions')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('propietario'); //falsa foreign
            $table->bigInteger('embarcacion'); //falsa foreign
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
        Schema::dropIfExists('embarcacionxpropietarios');
    }
};
