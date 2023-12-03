<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;

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
Route::view("/about","about");
// route for home page
// Route::get('/home', 'StudentsController@home');
Route::get('/home', [StudentsController::class, 'home']);
// route for students page
Route::get('/students', [StudentsController::class, 'showStudents']);
// route for teachers page
Route::get('/teachers', [TeachersController::class, 'InsertTeacher']);
// showTeachers
Route::get('/showTeachers', [TeachersController::class, 'showTeachers']);
