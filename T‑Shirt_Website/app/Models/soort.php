<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soort extends Model
{
    /** @use HasFactory<\Database\Factories\SoortFactory> */
    use HasFactory;

    public function tshirts()
    {
        return $this->hasMany(Tshirt::class, 'soort_id');
    }
}
