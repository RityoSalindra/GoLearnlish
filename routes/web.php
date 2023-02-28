<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

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




//register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
//login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/vidio', function () {
    return view('vidio');
});
Route::get('/materi', function () {
    return view('materi');
});
Route::post('/feedback/add', [HomeController::class, 'feedback'])->name('addfeedback');


Route::get('profile', [ProfileController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('editprofile/{id}', [ProfileController::class, 'edit'])->name('editprofile')->middleware('auth');
Route::get('editprofile/{id}', [ProfileController::class, 'edit'])->name('editprofile')->middleware('auth');
Route::post('updateprofile', [ProfileController::class, 'updateprofile'])->name('updateprofile')->middleware('auth');
