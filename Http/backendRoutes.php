<?php
Route::group(['prefix' => '/hello','middleware' => ['web']], function () {
    Route::get('hello', ['as' => 'backend.hello.index', 'uses' => 'HelloController@index']);
});
