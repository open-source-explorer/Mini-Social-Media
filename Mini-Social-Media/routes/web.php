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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signup', [
    'uses' => 'UserController@signUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@signIn',
    'as' => 'signin'
]);

Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard'
]);

Route::post('/createpost', [
    'uses' => 'PostController@CreatePost',
    'as' => 'createpost'
]);

Route::get('/deletepost/{post_id}', [
    'uses' => 'PostController@DeletePost',
    'as' => 'deletepost'
]);

Route::get('/logout', [
    'uses' => 'UserController@logOut',
    'as' => 'logout'
]);