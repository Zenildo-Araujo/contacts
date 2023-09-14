<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginRegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// returns the home page with all contacts


      
Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/index', 'App\Http\Controllers\ContactController@index')->name('contacts.index');
    
    Route::get('/contacts/show_all', 'App\Http\Controllers\ContactController@show_all')->name('contacts.show_all');
    //Create form to add a new contact
    Route::get('/contact/create', 'App\Http\Controllers\ContactController@create')->name('contacts.create');
    // Store
    Route::post('/contacts', 'App\Http\Controllers\ContactController@store')->name('contacts.store');
    Route::get('/contacts/{contact}', 'App\Http\Controllers\ContactController@show')->name('contacts.show');
    Route::get('/contacts/{contact}/edit', 'App\Http\Controllers\ContactController@edit')->name('contacts.edit');
    Route::get('/contacts/{contact}/detail', 'App\Http\Controllers\ContactController@detail')->name('contacts.detail');
    //Update
    Route::put('/contacts/{contact}', 'App\Http\Controllers\ContactController@update')->name('contacts.update');
    //destroy
    Route::delete('/contacts/{contact}', 'App\Http\Controllers\ContactController@destroy')->name('contacts.destroy');
    
});


    