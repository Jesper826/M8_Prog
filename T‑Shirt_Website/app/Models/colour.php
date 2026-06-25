<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    /** @use HasFactory<\Database\Factories\ColourFactory> */
    use HasFactory;

    public function tshirts()
    {
        return $this->hasMany(Tshirt::class, 'colour_id');
    }
}
