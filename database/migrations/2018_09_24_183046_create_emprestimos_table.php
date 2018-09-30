<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data_inicio');
            $table->string('data_fim');
            $table->string('status');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->integer('id_livro')->unsigned();
            $table->foreign('id_livro')->references('id')->on('livros')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('emprestimos');
    }
}
