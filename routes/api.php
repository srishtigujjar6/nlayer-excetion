<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExceptionCheckController;
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
// RouteServiceProvider's structure changed in mvm 
// Also api route structure
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/check', [ExceptionCheckController::class,'check']);
Route::get('/skipCheck', [ExceptionCheckController::class,'skipCheck']);
Route::get('/skipcheckLater', [ExceptionCheckController::class,'skipcheckLater']);
