<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameVersion;

class GameVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameVersion::create([
            'name' => 'Retail'
        ]);

        GameVersion::create([
            'name' => 'Classic'
        ]);

        GameVersion::create([
            'name' => 'Cataclysm'
        ]);
    }
}
