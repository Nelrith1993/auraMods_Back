<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameVersion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories() 
    {
        return $this->belongsToMany(Category::class);
    }
}
