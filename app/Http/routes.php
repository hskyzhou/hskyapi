<?php
    
    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function(){
        Route::get('firstcata', 'CatagoryController@Firstcata');
        Route::get('secondcata', 'CatagoryController@SecondCata');
        Route::get('projectlist', 'CatagoryController@projectList');

        // Route::get('login', '')
    });