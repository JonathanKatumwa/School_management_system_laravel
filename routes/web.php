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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('classes', 'classesController');

Route::resource('classrooms', 'classroomsController');

Route::resource('levels', 'levelsController');

Route::resource('batches', 'batchesController');

Route::resource('shifts', 'shiftsController');

Route::resource('courses', 'coursesController');

Route::resource('faculties', 'facultiesController');

Route::resource('times', 'timesController');

Route::resource('attendances', 'attendancesController');

Route::resource('academics', 'academicsController');

Route::resource('days', 'daysController');

Route::resource('classAssignings', 'class_assigningsController');

Route::resource('classSchedulings', 'class_schedulingsController');

Route::resource('transactions', 'transactionsController');

Route::resource('admissions', 'admissionsController');

Route::resource('teachers', 'teachersController');

Route::resource('roles', 'rolesController');

Route::resource('users', 'usersController');