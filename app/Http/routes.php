<?php
    
    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function(){
        Route::get('firstcata', 'CatagoryController@Firstcata');
        Route::get('secondcata', 'CatagoryController@SecondCata');
        Route::get('projectlist', 'CatagoryController@projectList');

        Route::get('login', 'LoginController@login');
        Route::get('forgetpass', 'LoginController@forgetpass');
        Route::get('register', 'LoginController@register');
        
        Route::get('cart', 'LoginController@cart');


    });