<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            ['name' => 'Brujo', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#786AA3', 'categories' => ['Clases']],
            ['name' => 'Caballero de la muerte', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#C41F3B', 'categories' => ['Clases']],
            ['name' => 'Cazador', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#ABD473', 'categories' => ['Clases']],
            ['name' => 'Cazador de demonios', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#A330C9', 'categories' => ['Clases']],
            ['name' => 'Chamán', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#0070DE', 'categories' => ['Clases']],
            ['name' => 'Druida', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#FF7D0A', 'categories' => ['Clases']],
            ['name' => 'Evocador', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#33937F', 'categories' => ['Clases']],
            ['name' => 'Guerrero', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#C79C6E', 'categories' => ['Clases']],
            ['name' => 'Mago', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#69CCF0', 'categories' => ['Clases']],
            ['name' => 'Monje', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#00FF96', 'categories' => ['Clases']],
            ['name' => 'Paladin', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#F58CBA', 'categories' => ['Clases']],
            ['name' => 'Pícaro', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#FFF569', 'categories' => ['Clases']],
            ['name' => 'Sacerdote', 'image_uri' => '/storage/App/images/img.jpg', 'color' => '#212121', 'categories' => ['Clases']],
            ['name' => 'Raid', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['PvE']],
            ['name' => 'Mazmorras', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['PvE']],
            ['name' => 'Arenas', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['PvP']],
            ['name' => 'Campos de batalla', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['PvP']],
            ['name' => 'Duelos', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['PvP']],
            ['name' => 'PvP de mundo', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['PvP']],
            ['name' => 'Roles de clase', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Miscelaneo']],
            ['name' => 'Mecánicas de combate', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Miscelaneo']],
            ['name' => 'Equipamiento', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Miscelaneo']],
            ['name' => 'Accesibilidad', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Miscelaneo']],
            ['name' => 'General', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Miscelaneo']],
            ['name' => 'Profesiones de creación', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Profesiones']],
            ['name' => 'Profesiones de recolección', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Profesiones']],
            ['name' => 'Profesiones secundarias', 'image_uri' => '/storage/App/images/img.jpg', 'color' => 'NULL', 'categories' => ['Profesiones']],
        ];

        // Agrega el resto de las subcategorías aquí

        foreach ($subcategories as $subcategory) {
            // Crear la subcategoría
            $sub = Subcategory::create([
                'name' => $subcategory['name'],
                'image_uri' => $subcategory['image_uri'],
                'color' => $subcategory['color'],
            ]);

            // Asociar las categorías
            foreach ($subcategory['categories'] as $categoryName) {
                $category = Category::where('name', $categoryName)->first();
                if ($category) {
                    $sub->categories()->attach($category);
                }
            }
        }
    }
}
