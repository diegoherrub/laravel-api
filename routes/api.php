<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PharmacyController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pharmacies/month/{month}', [PharmacyController::class, 'getByMonth']);
Route::get('pharmacies/today-and-next', [PharmacyController::class, 'getTodayAndNextPharmacies']);
Route::apiResource('pharmacies', PharmacyController::class);

Route::get('events/month/{month?}', [EventsController::class, 'getEventsByMonth']);
Route::apiResource('events', EventsController::class);

Route::get('movie/{id}', [MoviesController::class, 'getById']);
Route::apiResource('movies', MoviesController::class);

Route::apiResource('news', NewsController::class);
