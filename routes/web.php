<?php

Route::group(['prefix' => '/'], function(){

Route::get('/', 'Site\SiteController@index');
Route::get('contato', 'Site\SiteController@contato');
Route::post('contato/enviar', 'Site\SiteController@enviar');
Route::get('blog', 'Site\SiteController@blog');
Route::get('noticia/{slug}', 'Site\SiteController@viewNoticia');

});

//Rotas Login
Auth::routes();

//Rotas Painel
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
//Dashboard Painel
Route::get('/', 'Painel\PainelController@index');

//Post
Route::get('posts', 'Painel\PostController@index');
Route::get('posts/create', 'Painel\PostController@create');
Route::get('posts/edit/{id}', 'Painel\PostController@edit');
Route::post('posts/store', 'Painel\PostController@store');
Route::patch('posts/update/{id}', 'Painel\PostController@update')->name('posts.update');

});