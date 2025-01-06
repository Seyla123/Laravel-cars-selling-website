<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::where('published_at', '<', now())
                ->with('primaryImage','model', 'city', 'maker', 'carType', 'fuelType')
                ->orderBy('published_at', 'desc')
                ->paginate(10);
                
        return view('home.index', [
            'cars'=>$cars
        ]);
    }
}
