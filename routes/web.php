<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuraController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\RoleController;

// Ruta principal con nombre 'index'
Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/subcategory/{id}', [SubcategoryController::class, 'show'])->name('subcategory.index');


// Rutas protegidas con middleware
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/subcategories', SubcategoryController::class);
    Route::resource('/auras', AuraController::class);
    Route::resource('/roles', RoleController::class);
});

