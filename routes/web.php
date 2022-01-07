<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SymptomesController;
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
    return view('dashboard');
})->name('dashboard');

Route::get('/wiki-medoc', function () {
  return view('wiki-medoc');
})->name('wiki-medoc');

Route::get('/wiki-medoc/details', function () {
  return view('wiki-medoc-details');
})->name('wiki-medoc-details');

Route::get('/chatbot', function () {
    return view('chatbot');
})->middleware(['auth'])->name('chatbot');

require __DIR__.'/auth.php';

Route::get('/allUsers',
    [UserController::class, 'showUsers']
)->name('allUsers');

Route::get('/showLoggedUser',
    [UserController::class, 'show']
)->middleware(['auth'])->name('showLoggedUser');

Route::post('/traitement',
    [SymptomesController::class, 'treatData']
)->name('traitement');

Route::resource('users', UserController::class);
Route::resource('doctor', DoctorController::class);