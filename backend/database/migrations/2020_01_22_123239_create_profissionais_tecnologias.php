<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissionaisTecnologias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionais_tecnologias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profissionais_id');
            $table->foreign('profissionais_id')->references('prof_id')->on('profissionais');
            $table->unsignedBigInteger('tecnologias_id');
            $table->foreign('tecnologias_id')->references('tec_id')->on('tecnologias');
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
        Schema::dropIfExists('profissionais_tecnologias');
    }
}
