<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    /** @use HasFactory<\Database\Factories\TShirtFactory> */
    use HasFactory;

    public function colour()
    {
        return $this->belongsTo(Colour::class, 'colour_id');
    }

    public function soort()
    {
        return $this->belongsTo(Soort::class, 'soort_id');
    }
}
