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
        $cars = User::find(id: 6)
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
        return view('car.create', compact('makers', 'models', 'carTypes', 'fuelTypes', 'states', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = request()->validate([
            'maker' => ['required'],
            'model' => ['required'],
            'year' => ['required'],
            'carType' => ['required'],
            'price' => ['required'],
            'vin' => ['required'],
            'mileage' => ['required'],
            'fuelType' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
        ]);

        // $car = Car::create([
        //     'maker_id' => request('maker'),
        //     'model_id' => request('model'),
        //     'year' => request('year'),
        //     'car_type_id' => request('carType'),
        //     'price' => request('price'),
        //     'vin' => request('vin'),
        //     'mileage' => request('mileage'),
        //     'fuel_type_id' => request('fuelType'),
        //     'state_id' => request('state'),
        //     'city_id' => request('city'),
        //     'address' => request('address'),
        //     'phone' => request('phone'),
        //     'description' => request('description'),
        //     'user_id' => 6,
        // ]);
        // $car->images()->createMany([
        //     [
        //         'image_path' => 'https://via.placeholder.com/640x480.png/004400?text=nobis',
        //         'position' => 1
        //     ],
        //     [
        //         'image_path' => 'https://via.placeholder.com/640x480.png/004400?text=nobis',
        //         'position' => 2
        //     ]
        // ]);
        return 'HELLO WORLD';
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
        $cars = User::find(7)
            ->favouriteCars()
            ->with('primaryImage', 'model', 'city', 'maker', 'carType', 'fuelType')
            ->where('deleted_at', null)
            ->orderBy('published_at', 'desc')
            ->paginate(10);
        return view('car.watchlist', compact('cars'));
    }
}
