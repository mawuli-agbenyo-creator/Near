<?php

use Illuminate\Http\Request;
use App\Http\Controllers\intel;
use App\Http\Controllers\imates;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/write', [imates::class, 'intake']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [intel::class, 'index']);
Route::post('/register', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::middleware(['auth:sanctum'])->group(function () {


Route::get('/all/inmates', [imates::class, 'search']);
Route::post('/update/inmates/', [imates::class, 'update']);

    
});