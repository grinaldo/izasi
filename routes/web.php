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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Home
Route::get('/', 'HomeController@index')->name('home');
// About
Route::get('/about', 'StaticController@aboutIndex')->name('about');
// Article, News, & Events
Route::resource('articles', 'ArticleController', ['only' => [
    'index', 'show'
]]);
// Members
Route::resource('members', 'MemberController', ['only' => ['index']]);
// Articles
Route::resource('contacts', 'ContactController', ['only' => ['index', 'store']]);