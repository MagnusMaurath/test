<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestartController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// Beispielroute ohne Controller
Route::get('/beispiel', function () {
    return response()->json(['message' => 'Hallo von der API!']);
});

// Beispielroute mit Controller

Route::post('/benutzer', 'BenutzerController@store');

Route::get('/restart', [RestartController::class, 'restartFunction']);