<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(id: 6)
                    ->cars()->with(['primaryImage', 'maker', 'model'])
                    ->orderBy('created_at', 'desc')
                    ->limit(5)->get();
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show',[
           'car'=>$car ,
           'favorite'=>true
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    public function search(Car $car)
    {


        $query = Car::with('primaryImage','model', 'city', 'maker', 'carType', 'fuelType')
                    -> where('published_at','<', now())
                    ->orderBy('published_at', 'desc');
        $carCount = $query->count();
        $cars = $query->limit(value: 12)->get();

        return view('car.search',compact('cars','carCount'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
    public function watchlist()
    {
        $cars = User::find(5)
                ->favouriteCars()
                ->with('primaryImage','model', 'city', 'maker', 'carType', 'fuelType')
                ->where('deleted_at', null)
                ->limit(10)
                ->get();
        return view('car.watchlist', compact('cars'));
    }
}
