<?php


Route::post('create', ['as'=> 'create_album', 'uses'=> 'AlbumController@createalbum' ]);
Route::get('/', ['as'=>'index', 'uses'=>'AlbumController@index']);
//Route::controller('create','AlbumController');
Route::get('create', ['as'=> 'create_album_form', 'uses'=> 'AlbumController@getCreate' ]);
Route::get('album{id}', ['as'=>'show_album', 'uses' =>'AlbumController@getAlbum']);


