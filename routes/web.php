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
route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/etudiants','EtudiantController');

Route::resource('/facultes','FaculteController');

Route::resource('/departements','DepartementController');

Route::resource('/niveaux','NiveauController');

Route::resource('/notes', 'NoteController');

Route::resource('/cycles', 'CycleController');

Route::resource('/parents', 'ParentController');




