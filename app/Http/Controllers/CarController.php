<?php

namespace App\Http\Controllers;

use App\Mail\CarPosted;
use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(id: Auth::id())
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
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carAtrributes = request()->validate([
            'maker_id' => ['required'],
            'model_id' => ['required'],
            'year' => ['required'],
            'car_type_id' => ['required'],
            'price' => ['required'],
            'vin' => ['required'],
            'mileage' => ['required'],
            'fuel_type_id' => ['required'],
            'state_id' => ['required'],
            'city_id' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
        ]);
        
        $car =Auth::user()->cars()->create([...$carAtrributes, 'description' => request('description')]);
        $car->features()->create();
        $storedPaths=[];
        foreach (request()->file('images') as $image=>$value) {
            $storedPaths[] = [
                'image_path' => $value->store('images', 'public'),
                'position' => $image+1
            ];
        }
        $car->images()->createMany($storedPaths);
       
        // // send email
        Mail::to($car->owner->email)->queue(new CarPosted($car));

        return redirect(route('car.index'));
        
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
        $makers = Maker::get();
        $models = Model::get();
        $carTypes = CarType::get();
        $fuelTypes = FuelType::get();
        $states = State::get();
        $cities = City::get();
        $query = Car::where('published_at', '<', now())
            ->with('primaryImage', 'model', 'city', 'maker', 'carType', 'fuelType')
            ->orderBy('published_at', 'desc');

        $cars = $query->paginate(12);
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
