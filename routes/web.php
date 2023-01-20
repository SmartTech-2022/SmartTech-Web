<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


use App\Http\Controllers\ElectionController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\{FrontController, UsersController, VoterController};


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

// Route::get('/', function () {
//     return view('welcome');
// });


// users route
Route::get('/', [FrontController::class, 'index']);

Route::get('/create-user', [UserController::class, 'create']);
Route::post('/create-user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

// Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.update');

// voters route
Route::get('/voters-create', [VoterController::class, 'create']);
Route::post('/voters', [VoterController::class, 'store'])->name('voter.store');
Route::get('/voters/{id}/edit',[VoterController::class, 'edit'])->name('voters.edit');
Route::patch('/voters/{id}',[VoterController::class, 'update'])->name('voters.update');
Route::delete('/voters/{id}',[VoterController::class, 'destroy']);


// elections route

Route::get('/election-create', [ElectionController::class, 'create']);
Route::post('/election', [ElectionController::class, 'store'])->name('election.store');
Route::get('/election/{id}/edit',[ElectionController::class, 'edit'])->name('election.edit');
Route::patch('/election/{id}',[ElectionController::class, 'update'])->name('election.update');
Route::delete('/election/{id}',[ElectionController::class, 'destroy']);



// contestants route
Route::get('/contestant-create', [ContestantController::class, 'create']);
Route::post('/contestant', [ContestantController::class, 'store'])->name('contestant.store');
Route::get('/contestant/{id}/edit',[ContestantController::class, 'edit'])->name('contestant.edit');
Route::patch('/contestant/{id}',[ContestantController::class, 'update'])->name('contestant.update');
Route::delete('/contestant/{id}',[ContestantController::class, 'destroy']);

























Route::get('about', [App\Http\Controllers\UsersController::class, 'about']);
Route::get('contact', [App\Http\Controllers\UsersController::class, 'contact']);

