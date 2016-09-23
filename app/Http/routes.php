<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PostController@index');
Route::get('welcome', function (){
    return view('welcome');
});

Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController');
Route::resource('posttag', 'PostTagController');
Route::resource('tag', 'TagController');
Route::resource('contact', 'ContactController');

Route::get('post/category/{category_id}', 'PostController@getByCategoryId');

Route::get('admin', 'AdminController@index');
Route::get('admin/post', 'AdminController@getPost');
Route::get('admin/category', 'AdminController@getCategory');
Route::get('admin/contact', 'AdminController@getContact');

Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',['as' => 'addentry', 'uses' => 'FileEntryController@add']);

Route::auth();
