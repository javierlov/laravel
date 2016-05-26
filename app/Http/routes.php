<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::resource('usuarioadmin', 'UsuarioControler');


Route::get('PageLayout', function() {
    return View::make('pages.home');
});
Route::get('PageAbout', function() {
    return View::make('pages.about');
});
Route::get('PageProjects', function() {
    return View::make('pages.projects');
});
Route::get('PageContact', function() {
    return View::make('pages.contact');
});

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++ */
Route::get('movies', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');

Route::get('controlador', 'TestController@index');
Route::get('name/{nombre}', 'TestController@name');
Route::resource('movie', 'MovieController');

Route::get('Test', function() {
    return "Hola probando routes.php";
});

Route::get('nombre/{nombre}', function($nombre) {
    return "Hola probando routes.php mi nombre es " . $nombre;
});


Route::get('edad/{edad?}', function($edad = 44) {
    return "Hola probando routes.php mi edad es " . $edad;
});


Route::get('welcome', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
