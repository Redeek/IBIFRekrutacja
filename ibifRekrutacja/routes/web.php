<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('checkUserType');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard')->middleware('checkUserType');
Route::get('/wysiwyg', [UserController::class, 'wysiwyg'])->name('user.wysiwyg');


Route::get('/contact', [EmailController::class, 'contact'])->name('contact');
Route::post('/contact', [EmailController::class, 'sendEmail'])->name('send.email');



Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);


Route::get('setlocale/{locale}', [LocalizationController::class, 'setLocale'])->name('setlocale');