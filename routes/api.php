<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubcategoryController;  // Asegúrate de importar tu controlador

// Ruta protegida para obtener el usuario autenticado (si usas Sanctum para autenticación)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta para obtener las subcategorías
Route::get('/subcategories', [SubcategoryController::class, 'index']);  // Devuelve todas las subcategorías

// Ruta para obtener las auras de una subcategoría
Route::get('/subcategories/{subcategory}/auras', [SubcategoryController::class, 'getAuras']);  // Devuelve las auras de una subcategoría específica
