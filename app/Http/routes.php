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

///		CONTACT
Route::get('/contact/{id?}', 'UserController@list'); 
Route::get('/contact/{id}', 'UserController@read');
Route::get('/contact/update/{id}', 'UserController@update');
Route::post('/contact/update/{id}', 'UserController@update');

///		LEEREENHEDEN
Route::get('/leereenheden', 'LearningunitController@index');
Route::get('/leereenheden/create', 'LearningunitController@create');
Route::post('/leereenheden/create', 'LearningunitController@store');
Route::get('/leereenheden/view/{id}', 'LearningunitController@view');

///		PROJECT
Route::get('project/{uid?}','ProjectController@listProjects');
Route::get('/leereenheden/edit/{id}', 'learningunitcontroller@edit');
Route::post('/leereenheden/edit/{id}', 'learningunitcontroller@edit');


/*
///		PROJECT
Route::get('project/{uid?}','ProjectController@listProjects');
Route::get('project/view/{id}','ProjectController@read');
Route::get('project/update/{id?}','ProjectController@update');
Route::post('project/create', 'ProjectController@create');


/// 	LEEREENHEDEN
Route::get('/leereenheden', 'learningunitcontroller@index');
Route::post('/leereenheden/create', 'learningunitcontroller@store');
Route::get('/leereenheden/create', 'learningunitcontroller@store');
Route::get('/leereenheden/edit/{id}', 'learningunitcontroller@edit');
Route::get('/leereenheden/view/{id}', 'learningunitcontroller@view');
*/

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