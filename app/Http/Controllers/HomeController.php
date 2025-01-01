<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {

        $cars = array(
            ['id' => 1, 'image' => '/assets/images/car1.png', 'name' => 'Lexus RX350', 'year' => '2024', 'price' => '50000', 'location' => 'California', 'type' => ['SUV', 'Hybrid'], 'favorite' => false],
            ['id' => 2, 'image' => '/assets/images/car2.png', 'name' => 'Toyota Camry', 'year' => '2023', 'price' => '30000', 'location' => 'Texas', 'type' => ['Sedan', 'Gas'], 'favorite' => true],
            ['id' => 3, 'image' => '/assets/images/car3.png', 'name' => 'Honda Accord', 'year' => '2022', 'price' => '28000', 'location' => 'New York', 'type' => ['Sedan', 'Hybrid'], 'favorite' => false],
            ['id' => 4, 'image' => '/assets/images/car4.png', 'name' => 'Ford F-150', 'year' => '2024', 'price' => '55000', 'location' => 'Florida', 'type' => ['Truck', 'Gas'], 'favorite' => false],
            ['id' => 5, 'image' => '/assets/images/car5.png', 'name' => 'Chevrolet Silverado', 'year' => '2023', 'price' => '53000', 'location' => 'Nevada', 'type' => ['Truck', 'Diesel'], 'favorite' => true],
            ['id' => 6, 'image' => '/assets/images/car6.png', 'name' => 'BMW X5', 'year' => '2024', 'price' => '60000', 'location' => 'Illinois', 'type' => ['SUV', 'Gas'], 'favorite' => false],
            ['id' => 7, 'image' => '/assets/images/car7.png', 'name' => 'Audi Q7', 'year' => '2023', 'price' => '65000', 'location' => 'Washington', 'type' => ['SUV', 'Diesel'], 'favorite' => true],
            ['id' => 8, 'image' => '/assets/images/car8.png', 'name' => 'Mercedes-Benz C-Class', 'year' => '2022', 'price' => '40000', 'location' => 'Georgia', 'type' => ['Sedan', 'Hybrid'], 'favorite' => false],
            ['id' => 9, 'image' => '/assets/images/car9.png', 'name' => 'Tesla Model S', 'year' => '2024', 'price' => '75000', 'location' => 'California', 'type' => ['Sedan', 'Electric'], 'favorite' => true],
            ['id' => 10, 'image' => '/assets/images/car10.png', 'name' => 'Nissan Altima', 'year' => '2023', 'price' => '25000', 'location' => 'Ohio', 'type' => ['Sedan', 'Gas'], 'favorite' => false],
        );
        return view('home.index', [
            'cars' => $cars
        ]);
    }
}
