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
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(id: 5)
            ->cars()
            ->with(['primaryImage', 'maker', 'model'])
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makers = Maker::get();
        $models = Model::get();
        $carTypes = CarType::get();
        $fuelTypes = FuelType::get();
        $states = State::get();
        $cities = City::get();
        return view('car.create',compact('makers','models', 'carTypes','fuelTypes','states', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'hello word';
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', [
            'car' => $car,
            'favorite' => true
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
        $query = Car::where('published_at', '<', now())
            ->with('primaryImage', 'model', 'city', 'maker', 'carType', 'fuelType')
            ->orderBy('published_at', 'desc');
            
        $cars = $query->paginate(1);
        // dd($cars[0]);

        return view('car.search', compact('cars'));
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
            ->with('primaryImage', 'model', 'city', 'maker', 'carType', 'fuelType')
            ->where('deleted_at', null)
            ->orderBy('published_at', 'desc')
            ->paginate(10);
        return view('car.watchlist', compact('cars'));
    }
}
