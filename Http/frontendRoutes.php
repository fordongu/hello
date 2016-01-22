<?php

Route::group(['prefix' => '/hello','middleware' => ['web']], function()
{
	Route::get('/index', ['as' => 'frontend.hello.index', 'uses' => 'HelloController@index']);
});