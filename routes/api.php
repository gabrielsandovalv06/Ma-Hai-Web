<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReportController;
use Illuminate\Support\Facades\Route;

// Rutas públicas (no requieren token)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/categories', [CategoryController::class, 'index']);

// Rutas protegidas (exigen enviar el token de Sanctum en la cabecera Authorization)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Rutas de reportes
    Route::get('/reports', [ReportController::class, 'index']);      // Para el mapa (últimas 48 horas)
    Route::get('/reports/me', [ReportController::class, 'myReports']); // Para el historial en Perfil
    Route::post('/reports', [ReportController::class, 'store']);     // Para crear un reporte
});
