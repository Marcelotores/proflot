<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->integer('fluxo_id')->unsigned();
            $table->foreign('fluxo_id')->references('id')->on('fluxos');
            $table->integer('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status')->default('Pendente');
            $table->string('obs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitars');
    }
}
