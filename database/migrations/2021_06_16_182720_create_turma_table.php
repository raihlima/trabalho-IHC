<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disciplina');
            $table->foreign('id_disciplina')->references('id')->on('disciplina');
            $table->unsignedBigInteger('id_professor');
            $table->foreign('id_professor')->references('id_usuario')->on('professor');
            $table->string('codigo');
            $table->timestamp('data_inicio');
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
        Schema::dropIfExists('turma');
    }
}
