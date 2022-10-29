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

// Route::get('/', 'PagesController@index');
// Route::get('/admin', 'PagesController@admin');
// Route::get('/student', 'PagesController@student');



Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/studymaterial/uploadfiles', 'HomeController@Uploadm')->name('Uploadm');
Route::get('/studymaterial/viewfiles', 'HomeController@ViewMaterial')->name('ViewMaterial');
Route::resource('stdDel', 'FileUploadController');

Route::post('/std', 'FileUploadController@fileUploadPost')->name('fileupload');

Route::get('/studentrecords/view_stud', 'HomeController@view_stud')->name('view_stud');
Route::get('/studentrecords/newreg', 'HomeController@newreg')->name('newreg');
Route::post('/studentrecords/stu_register', 'HomeController@s_register')->name('s_register');
Route::resource('userDel', 'StuController');


Route::get('/test/createTest', 'HomeController@createtest')->name('createtest');
Route::post('/test/createTest', 'HomeController@question')->name('question');
Route::get('/test/viewTest', 'HomeController@Viewtest')->name('Viewtest');

