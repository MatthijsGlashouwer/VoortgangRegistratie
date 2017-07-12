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
///		Dashboard
Route::get('/', 'homecontroller@index');

///		CONTACT
//Route::get('/contact/{id?}', 'UserController@list'); 
Route::get('/contact/{id}', 'UserController@read');
Route::get('/contact/update/{id}', 'UserController@update');
Route::post('/contact/update/{id}', 'UserController@store');

///		LEEREENHEDEN
Route::get('/leereenheden/view/{id}', 'LearningunitController@read');
Route::get('/leereenheden/update/{id}', 'LearningunitController@update');
Route::post('/leereenheden/update/{id}', 'LearningunitController@store');

///		Project
Route::get('/project/{id}', 'ProjectController@read');
Route::get('/project/update/{id}', 'ProjectController@update');
Route::post('/project/update/{id}', 'ProjectController@store');
Route::get('/project/list/{uid}','ProjectController@listProjects');

///		GROUP
Route::get('/group/{id}', 'GroupController@read');
Route::get('/group/update/{id}', 'GroupController@update');

/// 	CHECKLIST
Route::get('checklist/{id}','ChecklistController@read');
Route::get('checklist/create/{id}','ChecklistController@create');
Route::get('checklist/update/{id}','ChecklistController@update');

/// 	FEEDBACK
Route::get('feedback/{id}','feedbackcontroller@read');
Route::get('feedback/create/{id}','feedbackcontroller@create');
Route::get('feedback/update/{id}','feedbackcontroller@update');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');