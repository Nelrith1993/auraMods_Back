<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aura extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación con Subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // Relación con Category (si es necesario)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
