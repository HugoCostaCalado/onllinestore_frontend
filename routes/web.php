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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/products', function () {
    return view('products.list');
})->name('home');

Route::get('/ product/', function () {
    return view('products.show');
});

// Route::get('/ register/', function () {
//     return view('registration.register');
// });

Route::get('/login','sessionController@create')->name('login');

Route::post('/login','sessionController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');