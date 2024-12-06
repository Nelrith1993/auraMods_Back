<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aura extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
