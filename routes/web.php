<?php

use Illuminate\Support\Facades\Route;

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
    return view('website.pages.welcome');
});

Route::get('/about-us', function () {
    return view('website.pages.about');
});

Route::get('/services', function () {
    return view('website.pages.services');
});

Route::get('/contact', function () {
    return view('website.pages.contact');
});

Route::get('about-us/{name}/{email}', function($name, $em){
	return view('about-us', ['myname'=>$name, 'myemail'=>$em]);
});

Route::get('team/{name}', 'MyController@team');

Route::get('employees', 'EmployeeController@index');

Route::get('add-employee', 'EmployeeController@add');

Route::post('insert-employee', 'EmployeeController@store');

Route::get('students', 'StudentController@index');

Route::get('add-student','StudentController@add');

Route::post('store-student', 'StudentController@create');

Route::get('edit-student/{id}', 'StudentController@edit');

Route::post('update-student/{id}', 'StudentController@update');
