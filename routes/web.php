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
    return view('faith_mumbua_mutinda.home');
});

Route::get('/fees', function () {
    return view('faith_mumbua_mutinda.fees');
});
Route::get('/viewfeesall', function(){
	return view('faith_mumbua_mutinda.viewfeesall');
});
Route::get('/student', function () {
    return view('faith_mumbua_mutinda.student');
});
Route::post('student','StudentController@save');
Route::post('fees','FeesController@save');
Route::get('/search/fees','FeesController@search');
Route::get('/viewfeesall/fees','FeesController@viewfeesall');