<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ActorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [MainController::class, 'sendMail'])->name('contacts.send');


//Route::get('/movies/{movie:slug}', [MainController::class, 'movies'])->name('movies');



Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('actors', ActorController::class);
    Route::resource('movies', MovieController::class);
});


Auth::routes();

// Login Routes
// Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
// Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// // Registration Routes
// Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// // Password Reset Routes
// Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// // Email Verification Routes (тільки якщо включено верифікацію)
// Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
// Route::post('email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');
