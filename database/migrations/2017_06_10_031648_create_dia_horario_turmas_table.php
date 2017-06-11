<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaHorarioTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_horario_turmas', function (Blueprint $table) {
            $table->integer('dia_id')->unsigned();
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->integer('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->primary(['dia_id','horario_id', 'turma_id']);
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
        Schema::drop('dia_horario_turmas');
    }
}
