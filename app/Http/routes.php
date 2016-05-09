<?php
    
    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function(){
        Route::get('firstcata', 'CatagoryController@Firstcata');
    });