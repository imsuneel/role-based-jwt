<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/get-manager', ['uses'=>'Api\Account\ManagerController@index','as'=>'/get-manager']);
    Route::get('/get-customer', ['uses'=>'Api\Account\CustomerController@index','as'=>'/get-customer']);
    Route::get('/get-account', ['uses'=>'Api\Account\AccountController@index','as'=>'/get-account']);
});
Route::post('/login', ['uses'=>'Api\Auth\LoginController@index','as'=>'/login']);
Route::post('/register', ['uses'=>'Api\Auth\LoginController@register','as'=>'/register']);
