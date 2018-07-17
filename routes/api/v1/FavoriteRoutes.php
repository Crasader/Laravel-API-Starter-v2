<?php

Route::group(['prefix' => 'favorite'], function () {
    
    Route::get('{id}/category', 'App\\ACME\\Api\\V1\\Favorite\\Controllers\\SetCategoryAsFavoriteController@run');
    Route::get('{id}/collection',
        'App\\ACME\\Api\\V1\\Favorite\\Controllers\\SetCollectionAsFavoriteController@run');
    Route::get('{id}/artist', 'App\\ACME\\Api\\V1\\Favorite\\Controllers\\SetArtistAsFavoriteController@run');
    
    Route::get('user-favorites', 'App\\ACME\\Api\\V1\\Favorite\\Controllers\\ListUserFavoritesController@run');
    Route::get('category-images',
        'App\\ACME\\Api\\V1\\Favorite\\Controllers\\ListCategoryFavoritesImagesController@run');
    Route::get('collection-images',
        'App\\ACME\\Api\\V1\\Favorite\\Controllers\\ListCollectionFavoritesImagesController@run');
});