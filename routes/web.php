<?php

Route::get('/curriculo', 'FormularioFisemiController@curriculo')->name('curriculo');
Route::get('/', 'FormularioFisemiController@index')->name('fisemi');
Route::post('fisemi/store', 'FormularioFisemiController@store')->name('fisemi.store');
Route::get('fisemi/create', 'FormularioFisemiController@create')->name('fisemi.create');
Route::post('fisemi/edit', 'FormularioFisemiController@edit')->name('fisemi.edit');
Route::post('fisemi/update/{id}', 'FormularioFisemiController@update')->name('fisemi.update');
Route::get('fisemi/impressao/{id}', 'FormularioFisemiController@impressao')->name('fisemi.impressao');