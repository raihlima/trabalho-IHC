<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turma_estudante');
            $table->foreign('id_turma_estudante')->references('id')->on('turma_estudante');
            $table->integer('p1');
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->integer('p5');
            $table->integer('p6');
            $table->integer('p7');
            $table->integer('p8');
            $table->integer('p9');
            $table->integer('p10');
            $table->integer('p11');
            $table->integer('p12');
            $table->integer('p13');
            $table->integer('a1');
            $table->integer('a2');
            $table->integer('a3');
            $table->integer('a4');
            $table->integer('a5');
            $table->integer('a6');
            $table->integer('a7');
            $table->integer('a8');
            $table->integer('a9');
            $table->integer('a10');
            $table->boolean('concluido')->default(0);
            $table->timestamp('data_resposta');
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
        Schema::dropIfExists('avaliacao');
    }
}
