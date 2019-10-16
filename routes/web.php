<?php

Route::get('/', 'PagesController@index')->name('home');
Route::get('/unsubscribe', 'PagesController@getUnsubscribe')->name('unsubscribe');
Route::get('/subscribe', 'PagesController@getSubscribe')->name('subscribe');
Route::get('/category', 'PagesController@getCategory')->name('category');
Route::get('/storylist/{category}', 'StoryController@getIndex')->name('story.list');
Route::get('/storydetails/{id}', 'StoryController@getSingle')->name('story.details');
Route::post('/resultstore', 'StoryController@postResult')->name('result.store');