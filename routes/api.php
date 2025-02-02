<?php

use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhoneController;
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

// Route::get('pharmacy/today', [PharmacyController::class, 'getPharmacyForToday']);
// Route::get('pharmacy/{id}', [PharmacyController::class, 'getPharmacyById']);
// Route::get('pharmacies/month/{month}', [PharmacyController::class, 'getByMonth']);
// Route::get('pharmacies/week-schedules-on-call', [PharmacyController::class, 'getWeekSchedulesOnCall']);
// Route::get('pharmacies/on-call', [PharmacyController::class, 'getPharmaciesOnCall']);
Route::get('pharmacies/schedules-on-call', [PharmacyController::class, 'getSchedulesOnCall']);
Route::apiResource('pharmacies', PharmacyController::class);

Route::get('/events/range', [EventsController::class, 'getEventsByDateRange']);
Route::get('events/month/{month?}', [EventsController::class, 'getEventsByMonth']);
Route::apiResource('events', EventsController::class);

Route::get('movie/{id}', [MoviesController::class, 'getById']);
Route::apiResource('movies', MoviesController::class);

Route::apiResource('news', NewsController::class);

Route::get('establishments/type/{type}', [EstablishmentController::class, 'getByType']);
Route::apiResource('establishments', EstablishmentController::class);

Route::apiResource('phones', PhoneController::class);

