<?php

use App\Http\Controllers\AlumniAnswerController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::controller(LoginController::class)->as('login.')->group(function () {
    Route::get('login', 'index')->name('index');
    Route::post('auth', 'authenticate')->name('auth');
});
Route::post('logout', function (\Illuminate\Http\Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
    Route::controller(AlumniController::class)->as('alumni.')->group(function () {
        Route::get('alumni', 'index')->name('index');
        Route::post('alumni/store', 'store')->name('store');
        Route::get('alumni/{alumni}/edit', 'edit')->name('edit');
        Route::patch('alumni/{alumni}/update', 'update')->name('update');
        Route::delete('alumni/{alumni}/destroy', 'destroy')->name('destroy');
    });
    Route::resource('/question', QuestionController::class);
    Route::resource('/answer', AnswerController::class);
    Route::resource('/questionanswer', AlumniAnswerController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/setting', SettingController::class);
});
