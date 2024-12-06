<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@auramods.net',
            'password' => Hash::make('abc123.')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@auramods.net',
            'password' => Hash::make('abc123.')
        ]);
        $editor->assignRole('editor');


        $auraEditor = User::create([
            'name' => 'auraEditor',
            'email' => 'auraeditor@auramods.net',
            'password' => Hash::make('abc123.')
        ]);
        $auraEditor->assignRole('auraEditor');

    }
}
