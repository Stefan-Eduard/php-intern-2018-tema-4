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

// other things
Route::get('/', function () {
    // $archives = "http://api.local/results/archives";
    // dd($archives);
    
    return view('welcome');
})->name('home');
Route::get('/dashboard', function () {
    return view('dashboard')->with('crt_opt', 'all');
});

// sessions and registrations

Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


// about persons
Route::get('/persons', function() {
    return view('persons.table');
});
/*
Route::post('/persons', function() {
    return view('persons.table');
});
Route::put('/persons', function() {
    return view('persons.table');
});
Route::patch('/persons', function() {
    return view('persons.table');
});
Route::delete('/persons', function() {
    return view('persons.table');
});
*/

// about results
Route::get('/results', function() {
    return view('results.table');
});
