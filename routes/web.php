<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\DashboardController;
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
  return view('accueil',);
})->name('accueil');

Route::get('dashboard', [DashboardController::class, 'covid'])->middleware(['auth'])->name('dashboard');

Route::get('/wiki-medoc', function () {
  return view('wiki-medoc');
})->name('wiki-medoc');

Route::get('/wiki-medoc/details', function () {
  return view('wiki-medoc-details');
})->name('wiki-medoc-details');

Route::get('/wiki-medoc/details/doliprane', function () {
  return view('wikimedoc.doliprane');
})->name('wikimedoc.doliprane');

Route::get('/chatbot', function () {
  return view('chatbot');
})->middleware(['auth'])->name('chatbot');

require __DIR__ . '/auth.php';

Route::get('/first-aid', function () {
  return view('first-aid');
})->name('first-aid');

Route::get('/first-aid/pls', function () {
  return view('first-aid.pls');
})->name('first-aid.pls');
Route::get('/first-aid/etouffement', function () {
  return view('first-aid.etouffement');
})->name('first-aid.etouffement');
Route::get('/first-aid/pcr', function () {
  return view('first-aid.pcr');
})->name('first-aid.pcr');

Route::get(
  '/showLoggedUser',
  [UserController::class, 'show']
)->middleware(['auth'])->name('showLoggedUser');

Route::post(
  '/traitement',
  [SymptomesController::class, 'treatData']
)->name('traitement');

Route::resource('users', UserController::class);
Route::resource('doctor', DoctorController::class);

Route::prefix('api')->group(function () {
  Route::get('covid', [ApiController::class, 'covid'])->name('covid');
});
