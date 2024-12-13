<?php

namespace Database\Seeders;

use App\Models\Aura;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class AuraSeeder extends Seeder
{
    public function run()
    {
        $subcategories = Subcategory::all();  // Obtenemos todas las subcategorías

        foreach ($subcategories as $subcategory) {
            // Crear auras para cada subcategoría
            $auras = collect(range(1, 20))->map(function ($i) use ($subcategory) {
                return Aura::create([
                    'name' => "Aura $i - {$subcategory->name}",
                    'description' => "Description for Aura $i in {$subcategory->name}",
                    'image_uri' => "https://via.placeholder.com/150?text=Aura+$i",
                    'content_uri' => "https://example.com/content/aura_$i",
                    'subcategory_id' => $subcategory->id,
                    'category_id' => $subcategory->categories->first()->id,  // Aseguramos que esté relacionado con la primera categoría
                ]);
            });
        }
    }
}
