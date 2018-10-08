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

Route::get('/',['as'=>'publicacao','uses'=>'PublicacaoController@index']);
Route::post('/store',['as'=>'publicacao.store','uses'=>'PublicacaoController@store']);
Route::get('/edit/{id}',['as'=>'publicacao.edit','uses'=>'PublicacaoController@edit']);
Route::put('/update/{id}',['as'=>'publicacao.update','uses'=>'PublicacaoController@update']);
Route::get('/destroy/{id}',['as'=>'publicacao.destroy','uses'=>'PublicacaoController@destroy']);