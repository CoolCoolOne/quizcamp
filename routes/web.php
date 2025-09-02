<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
// use App\Http\Controllers\Livewire\Quiz;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


Route::resource('quizzes', QuizController::class);
