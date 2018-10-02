<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nome');
            $table->string('autor');
            $table->string('status');
            $table->integer('ano');
            $table->integer('nivel');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('livros');
    }
}
