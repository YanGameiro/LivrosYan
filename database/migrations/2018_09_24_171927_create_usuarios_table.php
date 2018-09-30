<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('login');
            $table->string('senha');
            $table->integer('nivel');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('usuarios');
    }
}
