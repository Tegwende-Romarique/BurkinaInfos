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

// les controllers du visiteur
Route::get('forme-visiteur', 'VisiteursController@forme');
Route::post('Visiteur/forme', 'VisiteursController@store');
Route::get('Visiteur/liste', 'VisiteursController@liste');
Route::get('forme-mail', 'VisiteursController@email');
Route::get('supprimer-visiteur', 'VisiteursController@destroy');


// les controllers du des Rubriques
Route::get('Rubrique/forme', 'RubriquesController@forme');
Route::post('Rubrique/forme', 'RubriquesController@store');
Route::get('Rubrique/liste', 'RubriquesController@liste');
Route::get('Supprimer-rubrique', 'RubriquesController@destroy');
Route::get('modifier-rubrique', 'RubriquesController@editer');
Route::post('rubrique-update', 'RubriquesController@update');
Route::get('publier-rubrique', 'RubriquesController@publier');


// les controllers du des articles
Route::get('forme-Article', 'ArticlesController@forme');
Route::post('Article/forme', 'ArticlesController@store');
Route::get('Article/liste', 'ArticlesController@liste');

// les Routes des mails
Route::get('forme-mail', 'MailsController@create');
Route::post('send-mail', 'MailsController@store');
