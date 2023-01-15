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

Route::get('/home', function () {
    return view('index');
});


// users route
Route::get('/', [FrontController::class, 'adminindex']);

Route::get('/create-user', [UserController::class, 'create']);
Route::get('/login-user', [UserController::class, 'login']);

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


Route::get('/election', [ElectionController::class, 'index'])->name('home');
Route::get('/election/{id}', [ElectionController::class, 'show'])->name('election.show');
Route::get('election-create', [ElectionController::class, 'create'])->name('elections.create');
Route::post('election-create', [ElectionController::class, 'store'])->name('election.store');
Route::get('election/edit/{id}', [ElectionController::class, 'edit'])->name('elections.edit');
Route::post('election/edit/{id}', [ElectionController::class, 'update'])->name('elections.update');
Route::get('election/delete/{id}', [ElectionController::class, 'destroy'])->name('election.destroy');



// contestants route
Route::get('/contestant-create', [ContestantController::class, 'create']);
Route::post('/contestant', [ContestantController::class, 'store'])->name('contestant.store');
Route::get('/contestant/{id}/edit',[ContestantController::class, 'edit'])->name('contestant.edit');
Route::patch('/contestant/{id}',[ContestantController::class, 'update'])->name('contestant.update');
Route::delete('/contestant/{id}',[ContestantController::class, 'destroy']);

























Route::get('about', [App\Http\Controllers\UsersController::class, 'about']);
Route::get('contact', [App\Http\Controllers\UsersController::class, 'contact']);

