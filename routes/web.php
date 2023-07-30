<?php

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

Route::get('idee', function () {
    return view('frontend.idee');
})->name('idee');

Route::get('about', function () {
    return view('frontend.about');
})->name('about');

Route::get('people', function () {
    return view('frontend.people');
})->name('people');

Route::get('projects', function () {
    return view('frontend.projects');
})->name('projects');

Route::get('contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('consultants', function () {
    return view('frontend.consultants');
})->name('consultants');


// Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
