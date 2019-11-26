<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'visitante'], function(){
   Route::get('listar', 'VisitanteController@listar');
   Route::get('criar', 'VisitanteController@criar');
   Route::get('{id}/editar', 'VisitanteController@editar');
   Route::get('{id}/remover', 'VisitanteController@remover');
   Route::post('salvar', 'VisitanteController@salvar');
});

Route::group(['prefix' => 'unidade'], function(){
   Route::get('listar', 'UnidadeController@listar');
   Route::get('criar', 'UnidadeController@criar');
   Route::get('{id}/editar', 'UnidadeController@editar');
   Route::get('{id}/remover', 'UnidadeController@remover');
   Route::post('salvar', 'UnidadeController@salvar');
});

Route::group(['prefix' => 'morador'], function(){
   Route::get('listar', 'MoradorController@listar');
   Route::get('criar', 'MoradorController@criar');
   Route::get('{id}/editar', 'MoradorController@editar');
   Route::get('{id}/remover', 'MoradorController@remover');
   Route::post('salvar', 'MoradorController@salvar');
});

Route::group(['prefix' => 'condominio'], function(){
   Route::get('listar', 'CondominioController@listar');
   Route::get('criar', 'CondominioController@criar');
   Route::get('{id}/editar', 'CondominioController@editar');
   Route::get('{id}/remover', 'CondominioController@remover');
   Route::post('salvar', 'CondominioController@salvar');
});

Route::group(['prefix' => 'area'], function(){
   Route::get('listar', 'AreaController@listar');
   Route::get('criar', 'AreaController@criar');
   Route::get('{id}/editar', 'AreaController@editar');
   Route::get('{id}/remover', 'AreaController@remover');
   Route::post('salvar', 'AreaController@salvar');
});

Route::group(['prefix' => 'reserva'], function(){
   Route::get('listar', 'ReservaController@listar');
   Route::get('criar', 'ReservaController@criar');
   Route::get('{id}/editar', 'ReservaController@editar');
   Route::get('{id}/remover', 'ReservaController@remover');
   Route::post('salvar', 'ReservaController@salvar');
});
