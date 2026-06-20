<?php

use App\Http\Controllers\AudioController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizCOntroller;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TasbihController;
use App\Http\Controllers\UserStore;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;


// Frontend View
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/works', [HomeController::class, 'works'])->name('works');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// 12 shareef Countdown
Route::get('/sasCountDown', [HomeController::class, 'sasCountDown'])->name('sasCountDown');

//Backend View
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth', 'verified')->name('dashboard');
Route::get('/date', [HomeController::class, 'date'])->middleware('auth', 'verified')->name('date');
Route::get('/user', [HomeController::class, 'user'])->middleware('auth', 'verified')->name('user');
Route::get('/works/category', [HomeController::class, 'category'])->middleware('auth', 'verified')->name('category');
Route::get('/works/post', [HomeController::class, 'post'])->middleware('auth', 'verified')->name('post');
Route::get('/audio', [HomeController::class, 'audio'])->middleware('auth', 'verified')->name('audio');


// Functional
Route::post('/user/store', [UserStore::class, 'user_store'])->middleware('auth', 'verified')->name('user.store');
Route::get('/user/delete/{id}', [UserStore::class, 'user_delete'])->name('user.delete');
Route::post('/date/update/{id}', [CommonController::class, 'date_update'])->name('date.update');
Route::post('/hijri/update', [CommonController::class, 'hijri_update'])->name('hijri.update');
Route::post('/volume/update', [CommonController::class, 'volume_update'])->name('volume.update');

//Works
Route::post('/category/store', [WorksController::class, 'category_store'])->name('category.store');

//Audio
Route::post('/audio/store', [AudioController::class, 'audio_store'])->name('audio.store');


//9Shareef Cover & Profile Pic
Route::get('/cover_photo', [CommonController::class, 'cover']);
Route::get('/cover/photo/down', [CommonController::class, 'cover_down'])->name('cover.down');

Route::get('/profile_photo', [CommonController::class, 'profile']);
Route::get('/profile/photo/down', [CommonController::class, 'profile_down'])->name('profile.down');

//Quiz
Route::get('/quiz9', [QuizCOntroller::class, 'quiz'])->name('quiz');
Route::post('/quiz9/store', [QuizCOntroller::class, 'quiz_store'])->name('quiz.store');
Route::get('/quiz9/success', [QuizCOntroller::class, 'quiz_success'])->name('quiz.success');
Route::get('/quiz/list', [QuizCOntroller::class, 'quiz_list'])->middleware('auth', 'verified')->name('quiz.list');
Route::get('/quiz/list/delete/{id}', [QuizCOntroller::class, 'quiz_delete'])->middleware('auth', 'verified')->name('quiz.list.delete');
Route::post('/quiz/deleteAll', [QuizController::class, 'quiz_deleteAll'])->middleware('auth', 'verified')->name('quiz_deleteAll');
Route::get('/quiz/time', [QuizCOntroller::class, 'quiz_time'])->middleware('auth', 'verified')->name('quiz.time');
Route::post('/quiz/time/update', [QuizCOntroller::class, 'quiz_time_update'])->name('quiz.time.update');

Route::get('/quiz/test/result', [QuizCOntroller::class, 'quiz_test_result'])->name('quiz.test.result');

Route::get('/result', [ResultController::class, 'result']);
Route::get('/certificate/{id}', [ResultController::class, 'certificate'])->name('certificate');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Tasbih Route
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/tasbih/list', [TasbihController::class, 'tasbih_list'])->name('tasbih.list');
    Route::get('/tasbih/visibility', [TasbihController::class, 'tasbih_visibility'])->name('tasbih.visibility');
    Route::get('/tasbih/empty', [TasbihController::class, 'tasbih_empty'])->name('tasbih.empty');
});

Route::get('/visibility', [TasbihController::class, 'visibility'])->name('visibility');
Route::get('/tasbih/signup', [TasbihController::class, 'signup'])->name('tasbih.signup');
Route::post('/tasbih/store', [TasbihController::class, 'store'])->name('tasbih.store');
Route::get('/tasbih/verify/{phone}', [TasbihController::class, 'verify'])->name('tasbih.verify');
Route::post('/tasbih/verified/{phone}', [TasbihController::class, 'verified'])->name('tasbih.verified');

Route::get('/tasbih/signin', [TasbihController::class, 'tasbih_signin'])->name('tasbih.signin');
Route::post('/tasbih/signin/store', [TasbihController::class, 'tasbih_signin_store'])->name('tasbih.signin.store');

Route::middleware('tasbih')->group(function () {
    Route::get('/tasbih', [TasbihController::class, 'tasbih'])->middleware('tasbih')->name('tasbih');
    Route::get('/tasbih/signout', [TasbihController::class, 'tasbih_signout'])->name('tasbih.signout');
    Route::post('/tasbih/count/update', [TasbihController::class, 'tasbih_count_update'])->name('tasbih.count.update');
});

Route::get('/meeladShareef', [HomeController::class, 'meeladShareef'])->name('meeladShareef');
Route::post('/meeladShareef/store', [HomeController::class, 'meeladShareef_store'])->name('meeladShareef.store');
Route::get('/meeladShareef/list', [HomeController::class, 'meeladShareef_list'])->name('meeladShareef.list');
Route::get('/meeladShareef/visibility', [HomeController::class, 'meeladShareef_visibility'])->name('meeladShareef.visibility');


Route::get('/onlinePostReportlist', [HomeController::class, 'onlinePostReportlist'])->name('onlinePostReportlist')->middleware('auth', 'verified');
Route::get('/onlinepost', [HomeController::class, 'onlinePost'])->name('onlinepost');
Route::post('/postReport/store', [HomeController::class, 'postReport_store'])->name('postReport.store');

Route::get('/protijogita', [HomeController::class, 'protijogita'])->name('protijogita');
Route::post('/protijogita/store', [HomeController::class, 'protijogita_store'])->name('protijogita.store');
Route::post('/competition/calculate', [HomeController::class, 'calculate'])->name('competition.calculate');
Route::get('/protijogita/applied/{id}', [HomeController::class, 'protijogita_applied'])->name('protijogita.applied');


require __DIR__ . '/auth.php';