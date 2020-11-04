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

Route::get('/testeDisk', function () {
    dd(Storage::disk('ocr')->listContents());
});


Route::get('/', function () {
    return view('welcome');
})->middleware('verified');


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


Route::resource('maoObraServicos', 'MaoObraServicoController');

Route::resource('lc116s', 'Lc116Controller');

Route::resource('statusServicos', 'StatusServicoController');

Route::resource('classeServicos', 'ClasseServicoController');

Route::resource('sublasseServicos', 'SublasseServicoController');

Route::resource('servicos', 'ServicoController');

Route::resource('contratacaoServicos', 'ContratacaoServicoController');

Route::resource('contratacaoServicos', 'ContratacaoServicoController');

Route::resource('contratacaoServicos', 'ContratacaoServicoController');

Route::resource('perfilContratacaos', 'PerfilContratacaoController');

Route::resource('envioNotaServicos', 'EnvioNotaServicoController')->middleware('verified');


Route::resource('envioNotaPreNota', 'EnvioNotaPreNotaController');




Route::resource('envioNotaEnergia', 'EnvioNotaEnergiaController');

Route::resource('enquadramentoServico', 'EnquadramentoController');


Route::resource('apiReceitaFederalCnpjs', 'ApiReceitaFederalCnpjController');


Route::resource('materials', 'MaterialController');


Route::resource('tipoObrigacaos', 'TipoObrigacaoController');

Route::resource('sfAnuncios', 'SfAnuncioController');

Route::resource('anuncianteCargas', 'AnuncianteCargaController');

Route::resource('estados', 'EstadoController');

Route::resource('relatorioCargaXmls', 'RelatorioCargaXmlController');

Route::resource('sfAnuncioFotos', 'SfAnuncioFotoController');

Route::resource('anuncianteProfissionalPacotes', 'AnuncianteProfissionalPacoteController');

Route::resource('tipoImovels', 'TipoImovelController');