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
        
        $car =Auth::user()->cars()->create([
            ...$carAtrributes, 
            'description' => request('description'),
            'published_at' => now()]);
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
    public function edit(Car $car)
    {
        return view('car.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->update([
            'maker_id' =>request('maker_id'),
            'model_id' =>request('model_id'),
            'year' =>request('year'),
            'car_type_id' =>request('car_type_id'),
            'price' =>request('price'),
            'vin' =>request('vin'),
            'mileage' =>request('mileage'),
            'fuel_type_id' =>request('fuel_type_id'),
            'state_id' =>request('state_id'),
            'city_id' =>request('city_id'),
            'address' =>request('address'),
            'phone' =>request('phone'),
            "description"=>request("description")
        ]);
        return redirect(route('car.index'));
    }

    public function search(Request $request)
    {
        if(request('search')) {
            dd($request->search);
        }
        $orderBy = [
            (object) [
                "id" => "price",
                "name" => "Price"
            ],
            (object) [
                "id" => "year",
                "name" => "year"
            ]
        ];
        $query = Car::where('published_at', '<', now());
            
        // maker
        $query->when(request('maker_id'), function ($query) {
                $query->where('maker_id', request('maker_id'));
            });

        // model
        $query->when(request('model_id'), function ($query) {
                $query->where('model_id', request('model_id'));
            });
        
        // car type
        $query->when(request('car_type_id'), function ($query) {
                $query->where('car_type_id', request('car_type_id'));
            });

        // fuel type
        $query->when(request('fuel_type_id'), function ($query) {
                $query->where('fuel_type_id', request('fuel_type_id'));
            });

        // state
        $query->when(request('state_id'), function ($query) {
                $query->where('state_id', request('state_id'));
            });

        // city
        $query->when(request('city_id'), function ($query) {
                $query->where('city_id', request('city_id'));
            });
        
        // year
        $query->when(request('yearFrom') && request('yearTo'), function ($query) {
            $query->whereBetween('year', [request('yearFrom'), request('yearTo')]);
        });

        // price
        $query->when(request('priceFrom') && request('priceTo'), function ($query) {
            $query->whereBetween('price', [request('priceFrom'), request('priceTo')]);
        });

        $query->orderBy('published_at', 'desc');


        $cars = $query->with('primaryImage', 'model', 'city', 'maker', 'carType', 'fuelType')->paginate(12);

        $cars = $query->paginate(12);
        return view('car.search', compact('cars', 'orderBy'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('car.index')->with('success', 'Car deleted successfully.');
    }
    public function watchlist()
    {
        $cars = Auth::user()
            ->favouriteCars()
            ->with('primaryImage', 'model', 'city', 'maker', 'carType', 'fuelType')
            ->where('deleted_at', null)
            ->orderBy('published_at', 'desc')
            ->paginate(10);
        return view('car.watchlist', compact('cars'));
    }
}
