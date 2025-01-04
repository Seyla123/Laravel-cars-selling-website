<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::where('published_at', '<', now())
                ->orderBy('published_at', 'desc')
                ->limit(30)
                ->get();
                
        return view('home.index', [
            'cars'=>$cars
        ]);
    }
}
