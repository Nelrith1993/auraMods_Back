<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación muchos a muchos con Category
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Relación uno a muchos con Aura
    public function auras()
    {
        return $this->hasMany(Aura::class);
    }
}
