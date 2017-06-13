<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){

	Route::get('', function () {
		return view('menu');
	});

/*-----------------------------Disciplinas------------------------------------------------------------------*/
Route::get('disciplinas/index',['as'=>'disciplinas.index', 'uses'=>'DisciplinaController@index']);
Route::get('disciplinas/novo',['as'=>'disciplinas.create', 'uses'=>'DisciplinaController@create']);
Route::post('disciplina/store',['as'=>'disciplinas.store', 'uses'=>'DisciplinaController@store']);
Route::get('disciplinas/editar/{id}',['as'=>'disciplinas.edit', 'uses'=>'DisciplinaController@edit']);
Route::post('disciplinas/update/{id}',['as'=>'disciplinas.update', 'uses'=>'DisciplinaController@update']);
Route::get('disciplinas/destroy/{id}',['as'=>'disciplinas.destroy', 'uses'=>'DisciplinaController@destroy']);
Route::get('disciplinas/show/{id}',['as'=>'disciplinas.show', 'uses'=>'DisciplinaController@show']);

//Retorna as disciplinas por periodo
Route::get('disciplinas/periodo/{id}',['as'=>'disciplinas.periodo', 'uses'=>'DisciplinaController@getDisciplinasByPeriodo']);


/*----------------------------Lotacao-------------------------------------------------------------------*/
Route::get('turmas/index',['as'=>'turmas.index', 'uses'=>'TurmaController@index']);
Route::get('turmas/novo',['as'=>'turmas.create', 'uses'=>'TurmaController@create']);
Route::post('turmas/store',['as'=>'turmas.store', 'uses'=>'TurmaController@store']);
Route::get('turmas/remove/{id}',['as'=>'turmas.destroy', 'uses'=>'TurmaController@destroy']);


/*---------------------------------UserProfessor------------------------------------------------------------------*/

Route::get('users/index',['as'=>'users.index', 'uses'=>'UserController@index']);
Route::get('users/create',['as'=>'users.create', 'uses'=>'UserController@create']);
Route::post('users/store',['as'=>'users.store', 'uses'=>'UserController@store']);
Route::get('users/editar/{id}',['as'=>'users.edit', 'uses'=>'UserController@edit']);
Route::post('users/update/{id}',['as'=>'users.update', 'uses'=>'UserController@update']);
Route::get('users/statu/{id}',['as'=>'users.status', 'uses'=>'UserController@status']);
Route::get('users/show/{id}',['as'=>'users.show', 'uses'=>'UserController@show']);


Route::get('entrar',['as'=>'login.index', 'uses'=>'LoginController@index']);



/*---------------------------------UserProfessor------------------------------------------------------------------*/

Route::get('salas/index',['as'=>'salas.index', 'uses'=>'SalaController@index']);
Route::get('salas/novo',['as'=>'salas.create', 'uses'=>'SalaController@create']);
Route::post('salas/store',['as'=>'salas.store', 'uses'=>'SalaController@store']);
Route::get('salas/editar/{id}',['as'=>'salas.edit', 'uses'=>'SalaController@edit']);
Route::post('salas/update/{id}',['as'=>'salas.update', 'uses'=>'SalaController@update']);
Route::get('salas/destroy/{id}',['as'=>'salas.destroy', 'uses'=>'SalaController@destroy']);
Route::get('salas/show/{id}',['as'=>'salas.show', 'uses'=>'SalaController@show']);



/*----------------------------Coordenadores-------------------------------------------------------------------*/
Route::get('coordenadores/index',['as'=>'coordenadores.index', 'uses'=>'CoordenadorController@index']);
Route::get('coordenadores/novo',['as'=>'coordenadores.create', 'uses'=>'CoordenadorController@create']);
Route::post('coordenadores/update',['as'=>'coordenadores.update', 'uses'=>'CoordenadorController@update']);
Route::get('coordenadores/editar/{id}',['as'=>'coordenadores.edit', 'uses'=>'AlunoController@edit']);
Route::post('coordenadores/update/{id}',['as'=>'coordenadores.update', 'uses'=>'AlunoController@update']);
Route::get('coordenadores/destroy/{id}',['as'=>'coordenadores.destroy', 'uses'=>'CoordenadorController@destroy']);
Route::get('coordenadores/show/{id}',['as'=>'coordenadores.show', 'uses'=>'AlunoController@show']);
Route::get('coordenadores/solicitar',['as'=>'coordenadores.solicitar', 'uses'=>'CoordenadorController@solicita']);
Route::post('coordenadores/storesolicita',['as'=>'coordenadores.storesolicita', 'uses'=>'CoordenadorController@storesolicita']);
Route::get('coordenadores/solicita/mostra',['as'=>'coordenadores.solicita.mostra', 'uses'=>'CoordenadorController@mostra']);
Route::get('coordenadores/visualizar/solicita/{id}',['as'=>'coordenadores.visualizar.solicita', 'uses'=>'CoordenadorController@visualiza']);

/*-----------------------------Professores----------------------------------------------------------*/
Route::get('professores/index',['as'=>'professores.index', 'uses'=>'ProfessorController@index']);
Route::get('professores/novo',['as'=>'professores.create', 'uses'=>'ProfessorController@create']);
Route::post('professores/store',['as'=>'professores.store', 'uses'=>'ProfessorController@store']);
Route::get('professores/editar/{id}',['as'=>'professores.edit', 'uses'=>'ProfessorController@edit']);
Route::post('professores/update/{id}',['as'=>'professores.update', 'uses'=>'ProfessorController@update']);
Route::get('professores/destroy/{id}',['as'=>'professores.destroy', 'uses'=>'ProfessorController@destroy']);
Route::get('professores/show/{id}',['as'=>'professores.show', 'uses'=>'ProfessorController@show']);


});


Route::resource('login','LoginController@store');
Route::get('logout','LoginController@logout');





