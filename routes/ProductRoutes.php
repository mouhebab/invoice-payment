<?php

Route::group(['prefix' => 'products', 'middleware' => 'auth'], function() {
    Route::get('', 'ProductController@index')->name('product');

    Route::get('create/{client_id?}', 'ProductController@create')->name('product.create');
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::get('edit/{product}', 'ProductController@edit')->name('product.edit');
    Route::post('update/{product}', 'ProductController@update')->name('product.update');

    Route::get('destroy/{product}', 'ProductController@destroy')->name('product.destroy');
});