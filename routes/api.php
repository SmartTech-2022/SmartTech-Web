<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\VotesController;
use App\Http\Controllers\Api\ElectionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Auth
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);79+
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {

    // Election
    Route::get('elections', [ElectionController::class, 'elections']);

    // contestant
    Route::get('contestants', [ElectionController::class, 'contestants']);
    Route::post('store', [VotesController::class, 'store']);
    Route::name('contestants.')->group(function () {
    Route::get('contestants/{id}', 'ContestantController@show')->name('show');
    });
});


//Route::post('/login', [AuthController::class, 'loginUser']);
