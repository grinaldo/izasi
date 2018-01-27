<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [
    'as' => 'backend.dashboard', 
    'uses' => 'BackendController@index'
]);

Route::group(['as' => 'backend.'], function() {
    Auth::routes();
    // Users
    Route::get('users/anydata', [
        'as' => 'users.data',
        'uses' => 'UserController@anyData'
    ]);
    Route::resource('users', 'UserController');
    // Pages | Static About
    Route::get('pages/anydata', [
        'as' => 'pages.data',
        'uses' => 'PageController@anyData'
    ]);
    Route::resource('pages', 'PageController');
    // Banners
    Route::get('banners/anydata', [
        'as' => 'banners.data',
        'uses' => 'BannerController@anyData'
    ]);
    Route::resource('banners', 'BannerController');
    // Milestones
    Route::get('milestones/anydata', [
        'as' => 'milestones.data',
        'uses' => 'MilestoneController@anyData'
    ]);
    Route::resource('milestones', 'MilestoneController');
    // Subsidiaries
    Route::get('companies/anydata', [
        'as' => 'companies.data',
        'uses' => 'CompanyController@anyData'
    ]);
    Route::resource('companies', 'CompanyController');
    // Vision
    Route::get('visions/anydata', [
        'as' => 'visions.data',
        'uses' => 'VisionController@anyData'
    ]);
    Route::resource('visions', 'VisionController');
    // Initiatives
    Route::get('initiatives/anydata', [
        'as' => 'initiatives.data',
        'uses' => 'InitiativeController@anyData'
    ]);
    Route::resource('initiatives', ' InitiativeController');
    // Mission / Strategic
    Route::get('missions/anydata', [
        'as' => 'missions.data',
        'uses' => 'MissionController@anyData'
    ]);
    Route::resource('missions', 'MissionController');
    // Members
    Route::get('mmembers/anydata', [
        'as' => 'mmembers.data',
        'uses' => 'MemberController@anyData'
    ]);
    Route::resource('mmembers', 'MemberController');
    // Social Media
    Route::get('social-media/anydata', ['as' => 'social-media.data', 'uses' => 'SocialMediaController@anyData']);
    Route::resource('social-media', 'SocialMediaController');
     
});