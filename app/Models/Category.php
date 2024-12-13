<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación muchos a muchos con Subcategory
    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }
}

