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

Route::get('/', function () {
    return view('home');
});
Route::get('/sign-up', function () {
    return view('signUp');
});
Route::get('/forgot-password', function () {
    return view('forgotPassword');
});
Route::get('/contact-us', function () {
    return view('contact');
});
// Route::get('/forgot-password', [UserController::class, 'index']);

Route::get('/{any}', function () {
    return view('notFound');
})->where('any', '.*');
