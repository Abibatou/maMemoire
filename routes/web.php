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
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/docteurs', function () {
    return view('docteurs');
});
Route::get('/addDocteur', function () {
    return view('addDocteur');
});
Route::get('/departement', function () {
    return view('departement');
});
Route::get('/addDepartement', function () {
    return view('addDepartement');
});
Route::get('/patient', function () {
    return view('patient');
});
Route::get('/consultation', function () {
    return view('consultation');
});
//Route::post('login', 'LoginController@authenticate');
