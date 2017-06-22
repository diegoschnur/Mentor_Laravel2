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

Route::group(['prefix'=>'projetos', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('',                  ['as'=>'projetos',              'uses'=>'ProjetosController@index']);
    Route::get('create',            ['as'=>'projetos.create',       'uses'=>'ProjetosController@create']);
    Route::post('store',            ['as'=>'projetos.store',        'uses'=>'ProjetosController@store']);
    Route::get('{id}/destroy',      ['as'=>'projetos.destroy',      'uses'=>'ProjetosController@destroy']);
    Route::get('{id}/edit',         ['as'=>'projetos.edit',         'uses'=>'ProjetosController@edit']);
    Route::put('{id}/update',       ['as'=>'projetos.update',       'uses'=>'ProjetosController@update']);
});

Route::group(['prefix'=>'solicitacoes', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('',                  ['as'=>'solicitacoes',              'uses'=>'SolicitacoesController@index']);
    Route::get('create',            ['as'=>'solicitacoes.create',       'uses'=>'SolicitacoesController@create']);
    Route::post('store',            ['as'=>'solicitacoes.store',        'uses'=>'SolicitacoesController@store']);
    Route::get('{id}/destroy',      ['as'=>'solicitacoes.destroy',      'uses'=>'SolicitacoesController@destroy']);
    Route::get('{id}/edit',         ['as'=>'solicitacoes.edit',         'uses'=>'SolicitacoesController@edit']);
    Route::put('{id}/update',       ['as'=>'solicitacoes.update',       'uses'=>'SolicitacoesController@update']);
});

Route::group(['prefix'=>'fichastecnicas', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('',                  ['as'=>'fichastecnicas',              'uses'=>'FichasTecnicasController@index']);
    Route::get('create',            ['as'=>'fichastecnicas.create',       'uses'=>'FichasTecnicasController@create']);
    Route::post('store',            ['as'=>'fichastecnicas.store',        'uses'=>'FichasTecnicasController@store']);
    Route::get('{id}/destroy',      ['as'=>'fichastecnicas.destroy',      'uses'=>'FichasTecnicasController@destroy']);
    Route::get('{id}/edit',         ['as'=>'fichastecnicas.edit',         'uses'=>'FichasTecnicasController@edit']);
    Route::put('{id}/update',       ['as'=>'fichastecnicas.update',       'uses'=>'FichasTecnicasController@update']);
});