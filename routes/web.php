<?php

use App\Http\Controllers\FriendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});

Route::resource('friends', FriendController::class);

Route::middleware(['auth','CekRole:admin'])->group(function () {
    Route::get('/home')->name('home');
});