<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aura;
use App\Models\Category;
use App\Models\GameVersion;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperar todas las categorías con sus respectivas subcategorías
        $categories = Category::with('subcategories')->get();

        // Recuperar todas las subcategorías
        $subcategories = Subcategory::all();

        // Recuperar todas las versiones del juego
        $gameVersions = GameVersion::all();

        // Recuperar todas las auras asociadas a las subcategorías de las categorías
        $auras = Aura::with(['subcategory', 'category'])->get();

        // Pasar todos los datos a la vista
        return Inertia::render('Index', [
            'index' => Route::has('index'),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'categories' => $categories,  // Pasar categorías con subcategorías
            'subcategories' => $subcategories, // Pasar subcategorías
            'gameVersions' => $gameVersions, // Pasar versiones del juego
            'auras' => $auras, // Pasar las auras
        ]);
    }



    function dashboard()
    {
        return Inertia::render('Dashboard');
    }
}
