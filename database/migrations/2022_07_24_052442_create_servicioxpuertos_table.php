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
        Schema::create('servicioxpuertos', function (Blueprint $table) {
            $table->id();
            //$table->foreign('puerto')->references('id')->on('puertos')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('servicio')->references('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('servicioxpuertos');
    }
};
