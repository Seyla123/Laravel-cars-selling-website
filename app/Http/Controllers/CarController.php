<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.index');
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
    public function show(string $id)
    {
        return view('car.show');
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
        $cars2 = array(
            ['id' => 1, 'image' => '/assets/images/car1.png', 'name' => 'Lexus RX350', 'year' => '2024', 'price' => '50000', 'location' => 'California', 'type' => ['SUV', 'Hybrid'], 'favorite' => false],
            ['id' => 2, 'image' => '/assets/images/car2.png', 'name' => 'Toyota Camry', 'year' => '2023', 'price' => '30000', 'location' => 'Texas', 'type' => ['Sedan', 'Gas'], 'favorite' => true],
            ['id' => 3, 'image' => '/assets/images/car3.png', 'name' => 'Honda Accord', 'year' => '2022', 'price' => '28000', 'location' => 'New York', 'type' => ['Sedan', 'Hybrid'], 'favorite' => false],
            ['id' => 4, 'image' => '/assets/images/car4.png', 'name' => 'Ford F-150', 'year' => '2024', 'price' => '55000', 'location' => 'Florida', 'type' => ['Truck', 'Gas'], 'favorite' => false],
        );
        return view('car.search',[
            'cars' => $cars2
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
