<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ExploreController;
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::view('/', 'tweets.index')->name('home');

    Route::get('/explore', ExploreController::class);

    Route::get('/profiles/{user:username}', [ProfilesController::class,'show'])->name(
        'profile'
    );
});


