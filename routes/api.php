<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\taskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/task', [taskController::class, 'getAllTask']);
    Route::post('/task', [taskController::class, 'store']);
    Route::put('/task/{id}', [taskController::class, 'update']);
    Route::delete('/task/{id}', [taskController::class, 'delete']);
});