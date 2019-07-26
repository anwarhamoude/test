<?php

Route::get('/', 'WebpageController@index');
Route::post('/webpages/store', 'WebpageController@store');
Route::get('/products', 'WebpageController@getProducts');
Route::get('/sum', 'WebpageController@getSum');

Route::get('/project_details', function () {
    return view('project_details.index');
});
