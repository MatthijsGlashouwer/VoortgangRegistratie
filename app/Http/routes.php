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
Route::get('/contact/{id}', 'UserController@read');
Route::get('/contact/update/{id}', 'UserController@update');

///		PROJECT
Route::get('project/{id}','ProjectController@read');
Route::get('project/update/{id}','ProjectController@update');
Route::get('project/create/{id}','ProjectController@create');
Route::get('project/list/{userid}','ProjectController@listProjects');

/// 	LEEREENHEDEN
Route::get('/leereenheden', 'learningunitcontroller@index');
Route::get('/leereenheden/create', 'learningunitcontroller@create');
Route::get('/leereenheden/edit/{id}', 'learningunitcontroller@update');
Route::get('/leereenheden/view/{id}', 'learningunitcontroller@view');

///		GROUP
Route::get('/group/{id}', 'GroupController@read');
Route::get('/group/update/{id}', 'GroupController@update');
Route::get('/group/create/{id}', 'GroupController@update');

/// 	CHECKLIST
Route::get('checklist/{id}','ChecklistController@read');
Route::get('checklist/create/{id}','ChecklistController@create');
Route::get('checklist/update/{id}','ChecklistController@update');

/// 	FEEDBACK
Route::get('feedback/{id}','feedbackcontroller@read');
Route::get('feedback/create/{id}','feedbackcontroller@create');
Route::get('feedback/update/{id}','feedbackcontroller@update');


Route::get('/', function()
{
	return View::make('home');
});

Route::get('/createchecklist', function()
{
	return View::make('createchecklist');
});

/*	Dashboard */
Route::get('/', 'HomeController@index');

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');