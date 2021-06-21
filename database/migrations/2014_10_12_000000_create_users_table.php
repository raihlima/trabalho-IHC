<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricula')->unique();
            $table->string('password');
            $table->string('name');
            $table->rememberToken();
            $table->timestamps();
        });
/*
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricula')->unique();
            $table->string('senha');
            $table->string('nome');
            $table->rememberToken();
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
