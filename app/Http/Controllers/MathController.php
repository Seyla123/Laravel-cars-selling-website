<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }
}
