<?

// archive pages
Route::get( '/', 'PageController@getIndex' );
Route::get( 'page/{id}', 'PageController@getIndex' )->where( 'id', '[0-9]+' );

// handle login
Route::get( 'login', 'LoginController@getIndex' );
Route::get( 'login/c', 'LoginController@getCallback' );

// user page
Route::get( 'u/{name}', 'UserController@getIndex' );

// video page
Route::get( 'v/{name}', 'VideoController@getIndex' );