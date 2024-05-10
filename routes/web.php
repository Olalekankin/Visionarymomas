<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/support', [contactController::class, 'contact'])->name('support');

Route::post('/send-message', [contactController::class, 'sendEmail'])->name('contact.send');

Route::get('/vendor', function () {
    return view('vendor');
})->name('vendor');

Route::get('/term', function () {
    return view('term');
})->name('term');
