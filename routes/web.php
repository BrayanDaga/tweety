<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ExploreController;


Route::redirect('/', 'tweets');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/tweets', 'tweets.index')->name('home');


    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');


    Route::get('/explore', ExploreController::class);

    Route::get('/profiles/{user:username}', [ProfilesController::class,'show'])->name(
        'profile'
    );
});


