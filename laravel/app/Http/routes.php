<?php


//Route::get('/', ['as'=>'index', 'uses'=>'AlbumController@index']);
Route::post('create', ['as'=> 'create_album', 'uses'=> 'AlbumController@createalbum' ]);

//Route::controller('create','AlbumController');
Route::get('/', ['as'=> 'index', 'uses'=> 'AlbumController@create' ]);
//Route::get('album{id}', ['as'=>'show_album', 'uses' =>'AlbumController@getAlbum']);


