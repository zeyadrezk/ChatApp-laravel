<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
route::get('dashboard',[ChatController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
route::get('chat/{id}',[ChatController::class,'chat'])->middleware(['auth', 'verified'])->name('chat');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
