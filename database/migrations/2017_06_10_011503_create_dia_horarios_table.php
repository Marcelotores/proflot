<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_horarios', function (Blueprint $table) {
            $table->integer('dia_id')->unsigned();
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->integer('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->primary(['dia_id','horario_id']);
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
        Schema::drop('dia_horarios');
    }
}
