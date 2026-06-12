<?php

namespace App\Http\Controllers;

class AfspraakController extends Controller
{
    public function get(int $id)
    {
        return "Afspraak {$id}";
    }
}