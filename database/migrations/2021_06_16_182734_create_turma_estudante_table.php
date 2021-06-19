<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaEstudanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_estudante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turma');
            $table->foreign('id_turma')->references('id')->on('turma');
            $table->unsignedBigInteger('id_estudante');
            $table->foreign('id_estudante')->references('id_usuario')->on('estudante');
            
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
        Schema::dropIfExists('turma_estudante');
    }
}
