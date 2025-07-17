<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::middleware('auth:sanctum')->group(function () {
    // Get currently authenticated user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Booking API endpoints
    Route::apiResource('bookings', BookingController::class);
});
