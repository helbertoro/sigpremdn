<?php

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/que-es', 'HomeController@queEs')->name('queEs');

Route::middleware(['checkadministrator'])->group(function () {
    Route::get('/administracion', 'AdministratorController@administracion')->name('administracion');
    Route::get('/administracion/nuevo-usuario', 'AdministratorController@nuevoUsuario')->name('nuevoUsuario');
    Route::post('/administracion/post-nuevo-usuario', 'AdministratorController@postNuevoUsuario')->name('postNuevoUsuario');
    Route::get('/administracion/borrar-usuario/{id}', 'AdministratorController@deleteUsuario')->name('deleteUsuario');
});