<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD
Route::get('/about', function () {
  return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/', 'PostController@index')->name('home'); //->name('home') allows us to use the statement in our controllers: return redirect()->home();

Route::get('/posts/create', 'PostController@create');
//when the user requests a specific post, show the post
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');

Auth::routes();
Route::get('/home', 'HomeController@index');
=======
Route::get('/', 'PostController@index')->name('home'); //->name('home') allows us to use the statement in our controllers: return redirect()->home();
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
