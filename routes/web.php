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



Route::redirect('/', 'tweets');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/tweets', 'tweets.index')->name('home');
    Route::get(
        '/profiles/{user:username}/edit',
        'ProfilesController@edit'
    )->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController');

    Route::get('/profiles/{user:username}', 'ProfilesController@show')->name(
        'profile'
    );
});


