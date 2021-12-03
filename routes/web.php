<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/allUsers',
    [UserController::class, 'showUsers']
)->name('allUsers');

Route::get('/showLoggedUser',
    [UserController::class, 'show']
)->middleware(['auth'])->name('showLoggedUser');

Route::resource('users', UserController::class);
Route::resource('doctor', DoctorController::class);