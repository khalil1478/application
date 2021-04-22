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
Route::get('/upload', function () {
    return view('testupload');
});

Route::GET('/listequestionnaire',"Admin\UsersController@listequestionnaire");
Route::GET('/listeelectorals',"Admin\ListElectoralsController@liste_electorals");


Route::POST('/importlists',"Admin\ListElectoralsController@importlists");
Route::GET('/exportlists',"Admin\ListElectoralsController@exportlists");



Route::POST('/store',"testController@store");
Route::POST('/recherche',"Admin\UsersController@recherche");
Route::POST('/create',"Admin\UsersController@create");
Route::GET('/consulterprofile',"Admin\UsersController@consulterprofile");
Route::patch('/modifierprofile',"Admin\UsersController@modifierprofile");

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/users', 'Admin\UsersController')->middleware('can:manage-users');


Route::get('/test', function () {
    return view('test');
});


Route::get('/ajouter', function () {
    return view('ajouter');
});



