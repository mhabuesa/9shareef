<?php


use App\Http\Controllers\Quiz\QuizController;
use Illuminate\Support\Facades\Route;

 Route::controller(QuizController::class)->name('quiz.')->prefix('quiz')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
});
