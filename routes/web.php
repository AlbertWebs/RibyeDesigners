<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/the-company', [App\Http\Controllers\HomeController::class, 'company'])->name('company');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/center-of-excellence/{slung}', [App\Http\Controllers\HomeController::class, 'center_of_excellence'])->name('center-of-excellence');
Route::get('/laptops-for-hire', [App\Http\Controllers\HomeController::class, 'laptops_for_hire'])->name('laptops-for-hire');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/blogs/{slung}', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');