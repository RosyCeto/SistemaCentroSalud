<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosisTable extends Migration
{
    public function up()
    {
        Schema::create('dosis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacuna_id');
            $table->string('nombre');  // ejemplo: 'Primera dosis', 'Segunda dosis'
            $table->timestamps();

            // Relación con vacunas
            $table->foreign('vacuna_id')->references('id')->on('vacunas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosis');
    }
};
