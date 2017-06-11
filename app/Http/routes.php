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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){

/*-----------------------------Disciplinas------------------------------------------------------------------*/
Route::get('disciplinas/index',['as'=>'disciplinas.index', 'uses'=>'DisciplinaController@index']);
Route::get('disciplinas/novo',['as'=>'disciplinas.create', 'uses'=>'DisciplinaController@create']);
Route::post('disciplina/store',['as'=>'disciplinas.store', 'uses'=>'DisciplinaController@store']);
Route::get('disciplinas/editar/{id}',['as'=>'disciplinas.edit', 'uses'=>'DisciplinaController@edit']);
Route::post('disciplinas/update/{id}',['as'=>'disciplinas.update', 'uses'=>'DisciplinaController@update']);
Route::get('disciplinas/destroy/{id}',['as'=>'disciplinas.destroy', 'uses'=>'DisciplinaController@destroy']);
Route::get('disciplinas/show/{id}',['as'=>'disciplinas.show', 'uses'=>'DisciplinaController@show']);

//Retorna as disciplinas por periodo
Route::get('disciplinas/periodo/{id}',
	['as'=>'disciplinas.periodo', 'uses'=>'DisciplinaController@getDisciplinasByPeriodo']);


/*----------------------------Lotacao-------------------------------------------------------------------*/
Route::get('turmas/index',['as'=>'turmas.index', 'uses'=>'TurmaController@index']);
Route::get('turmas/novo',['as'=>'turmas.create', 'uses'=>'TurmaController@create']);
Route::post('turmas/store',['as'=>'turmas.store', 'uses'=>'TurmaController@store']);

/*----------------------------User-------------------------------------------------------------------*/
Route::get('users/index',['as'=>'users.index', 'uses'=>'UserController@index']);
Route::get('users/create',['as'=>'users.create', 'uses'=>'UserController@create']);
Route::post('users/store',['as'=>'users.store', 'uses'=>'UserController@store']);
Route::get('users/editar/{id}',['as'=>'users.edit', 'uses'=>'UserController@edit']);
Route::post('users/update/{id}',['as'=>'users.update', 'uses'=>'UserController@update']);
Route::get('users/statu/{id}',['as'=>'users.status', 'uses'=>'UserController@status']);
Route::get('users/show/{id}',['as'=>'users.show', 'uses'=>'UserController@show']);
Route::get('entrar',['as'=>'login.index', 'uses'=>'LoginController@index']);




});


Route::resource('login','LoginController@store');
Route::get('logout','LoginController@logout');