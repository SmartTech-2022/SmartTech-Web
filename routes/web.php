<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Adminpanel;
use App\Http\Controllers\Adminpanel\FrontController;
use App\Http\Controllers\Adminpanel\UserController;
use App\Http\Controllers\Adminpanel\VoterController;
use App\Http\Controllers\Adminpanel\ElectionController;
use App\Http\Controllers\Adminpanel\ContestantController;
use App\Http\Controllers\Adminpanel\VotesController;




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



Route::prefix('admin')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/login', [UserController::class, 'loginPage'])->name('login');
        Route::post('/login', [UserController::class, 'login'])->name('user.store');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [FrontController::class, 'adminindex'])->name('home');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/user}', [UserController::class, 'show'])->name('user.show');
        // elections
        Route::get('/election', [ElectionController::class, 'index'])->name('election.home');
        Route::get('/election', [ElectionController::class, 'show'])->name('election.show');
        Route::get('election-create', [ElectionController::class, 'create'])->name('elections.create');
        Route::post('election-create', [ElectionController::class, 'store'])->name('election.store');
        Route::get('election/edit/{id}', [ElectionController::class, 'edit'])->name('elections.edit');
        Route::post('election/edit/{id}', [ElectionController::class, 'update'])->name('elections.update');
        Route::get('election/delete/{id}', [ElectionController::class, 'destroy'])->name('election.destroy');

        // contestants route
        Route::get('/contestant-create', [ContestantController::class, 'create'])->name('contestant.create');
        Route::post('/contestant', [ContestantController::class, 'store'])->name('contestant.store');
        Route::get('/contestant', [ContestantController::class, 'show'])->name('contestant.show');
        Route::get('/contestant/{id}/edit', [ContestantController::class, 'edit'])->name('contestant.edit');
        Route::patch('/contestant/{id}', [ContestantController::class, 'update'])->name('contestant.update');
        Route::delete('/contestant/{id}', [ContestantController::class, 'destroy']);
    });
});




















Route::get('about', [App\Http\Controllers\UsersController::class, 'about']);
Route::get('contact', [App\Http\Controllers\UsersController::class, 'contact']);
