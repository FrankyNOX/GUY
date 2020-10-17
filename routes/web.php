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
    return view('auth.login');
});

Route::get('/gonfler', function () {
    return view('RELEVES.cra');
});

Route::get('/dashboard','DashboardController')->name("Dashboard");

Route::resource('Users','UsersController');

Route::resource('Etudiants','EtudiantsController');

Route::resource('Etablissements','EtablissementsController');

Route::resource('Filieres','FilieresController');

Route::resource('Cycles','CyclesController');

Route::resource('Options','OptionsController');

Route::resource('Niveaux','NiveauxController');

Route::resource('Salles','SallesController');

Route::resource('Semestres','SemestresController');

Route::resource('UE','UEController');

Route::resource('UV','UVController');

Route::resource('/json-cities','RegionController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/print','PrintController@print')->name("print");


