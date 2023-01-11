<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/create-user', [UserController::class, 'create']);
Route::post('/create-user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [FrontController::class, 'show'])->name('user.show');

// Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.update');

















Route::get('/voters/create', 'VoterController@create');
Route::post('/voters', 'VoterController@store');
Route::get('/voters/{id}/edit', 'VoterController@edit');
Route::patch('/voters/{id}', 'VoterController@update');
Route::delete('/voters/{id}', 'VoterController@destroy');









Route::get('about', [App\Http\Controllers\UsersController::class, 'about']);
Route::get('contact', [App\Http\Controllers\UsersController::class, 'contact']);

