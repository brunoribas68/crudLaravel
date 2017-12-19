<?php


Route::get('/','ProdutoController@lista');
Route::get('/produtos','ProdutoController@lista');
Route::get('/produtos/mostra/{id}','ProdutoController@mostra');
Route::get('/produtos/novo','ProdutoController@novo');
Route::get('/produtos/remover/{id}','ProdutoController@remover');
Route::get('/produtos/updateform/{id}','ProdutoController@updateform');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::post('/produtos/update/{id}','ProdutoController@update');
