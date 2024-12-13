<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Aura;
use Inertia\Inertia;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pasamos todas las subcategorías a Vue, sin necesidad de cargar auras aquí
        return Inertia::render('Subcategories/Index', [
            'subcategories' => Subcategory::all(),  // Aquí pasamos todas las subcategorías
        ]);
    }

    /**
     * Mostrar detalles de una subcategoría y sus auras
     */
    public function show($id)
    {
        // Obtenemos la subcategoría y sus auras asociadas
        $subcategory = Subcategory::with('auras')->findOrFail($id);

        // Devolvemos a Inertia la subcategoría y las auras
        return Inertia::render('Subcategories/Index', [
            'subcategory' => $subcategory,
            'auras' => $subcategory->auras,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
