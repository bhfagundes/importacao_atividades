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


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('atividades', 'AtividadesController');
Route::resource('cidades', 'CidadesController');
Route::resource('conteudo', 'ConteudoController');

Route::resource('atividadeEvidencias', 'AtividadeEvidenciaController');

Route::resource('evidencias', 'EvidenciaController');

Route::resource('obrigacao', 'ObrigacaoController');

Route::resource('dataAtividadeEvidencias', 'DataAtividadeEvidenciaController');

Route::resource('cruzamentos', 'CruzamentosController');
