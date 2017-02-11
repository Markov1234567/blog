<?php






Route::get('/', 'PostsController@index')->name('home');
Route::get('home', 'PostsController@index');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('posts/{post}', 'PostsController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');



Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::post('/tags', 'TagsController@store');



Route::get('/test', 'AjaxController@index');










Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');




// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table



// posts
// GET /posts   index
// GET /posts/create     create
// POST /posts     store
// GET /posts/{id}/edit   edit?
// GET /posts/{id} show
// PATCH /posts/{id}
// DELETE /posts/{id} delete
