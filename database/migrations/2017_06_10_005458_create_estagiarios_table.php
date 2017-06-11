<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstagiariosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estagiarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('cpf');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('sex');
            $table->string('username');
            $table->string('password', 60);
            $table->unique('email');
            $table->unique('cpf');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->boolean('aluno')->default(true);
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
		Schema::drop('estagiarios');
	}

}
