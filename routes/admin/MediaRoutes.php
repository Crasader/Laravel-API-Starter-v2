<?php

Route::group(['prefix' => 'media'], function () {
    
    ############## Admin Routes ###########################
    Route::get('{id}/get', 'App\ACME\Admin\Media\Controllers\AjaxGetImageController@run')
         ->name('admin.media.ajax.get');
    
    Route::post('/update', 'App\ACME\Admin\Media\Controllers\UpdateController@run')
         ->name('admin.media.update');
    Route::post('/delete', 'App\ACME\Admin\Media\Controllers\DestroyController@run')
         ->name('admin.media.destroy');
    
});