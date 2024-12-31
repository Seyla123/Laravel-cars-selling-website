<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {

        $cars = array(
            ['image' => '/assets/images/car1.png', 'name' => 'Lexus RX350', 'year' => '2024', 'price' => '50000', 'location' => 'California', 'type' => ['SUV', 'Hybrid'], 'favorite' => false],
            ['image' => '/assets/images/car2.png', 'name' => 'Toyota Camry', 'year' => '2023', 'price' => '30000', 'location' => 'Texas', 'type' => ['Sedan', 'Gas'], 'favorite' => true],
            ['image' => '/assets/images/car3.png', 'name' => 'Honda Accord', 'year' => '2022', 'price' => '28000', 'location' => 'New York', 'type' => ['Sedan', 'Hybrid'], 'favorite' => false],
            ['image' => '/assets/images/car4.png', 'name' => 'Ford F-150', 'year' => '2024', 'price' => '55000', 'location' => 'Florida', 'type' => ['Truck', 'Gas'], 'favorite' => false],
            ['image' => '/assets/images/car5.png', 'name' => 'Chevrolet Silverado', 'year' => '2023', 'price' => '53000', 'location' => 'Nevada', 'type' => ['Truck', 'Diesel'], 'favorite' => true],
            ['image' => '/assets/images/car6.png', 'name' => 'BMW X5', 'year' => '2024', 'price' => '60000', 'location' => 'Illinois', 'type' => ['SUV', 'Gas'], 'favorite' => false],
            ['image' => '/assets/images/car7.png', 'name' => 'Audi Q7', 'year' => '2023', 'price' => '65000', 'location' => 'Washington', 'type' => ['SUV', 'Diesel'], 'favorite' => true],
            ['image' => '/assets/images/car8.png', 'name' => 'Mercedes-Benz C-Class', 'year' => '2022', 'price' => '40000', 'location' => 'Georgia', 'type' => ['Sedan', 'Hybrid'], 'favorite' => false],
            ['image' => '/assets/images/car9.png', 'name' => 'Tesla Model S', 'year' => '2024', 'price' => '75000', 'location' => 'California', 'type' => ['Sedan', 'Electric'], 'favorite' => true],
            ['image' => '/assets/images/car10.png', 'name' => 'Nissan Altima', 'year' => '2023', 'price' => '25000', 'location' => 'Ohio', 'type' => ['Sedan', 'Gas'], 'favorite' => false],
            ['image' => '/assets/images/car11.png', 'name' => 'Kia Sorento', 'year' => '2024', 'price' => '35000', 'location' => 'Michigan', 'type' => ['SUV', 'Hybrid'], 'favorite' => false],
            ['image' => '/assets/images/car12.png', 'name' => 'Hyundai Tucson', 'year' => '2023', 'price' => '34000', 'location' => 'Arizona', 'type' => ['SUV', 'Gas'], 'favorite' => true],
            ['image' => '/assets/images/car13.png', 'name' => 'Mazda CX-5', 'year' => '2022', 'price' => '32000', 'location' => 'Colorado', 'type' => ['SUV', 'Diesel'], 'favorite' => false],
            ['image' => '/assets/images/car14.png', 'name' => 'Subaru Outback', 'year' => '2024', 'price' => '37000', 'location' => 'Virginia', 'type' => ['SUV', 'Gas'], 'favorite' => true],
            ['image' => '/assets/images/car15.png', 'name' => 'Volkswagen Passat', 'year' => '2023', 'price' => '28000', 'location' => 'Oregon', 'type' => ['Sedan', 'Hybrid'], 'favorite' => false],
            ['image' => '/assets/images/car16.png', 'name' => 'Volvo XC90', 'year' => '2024', 'price' => '67000', 'location' => 'Minnesota', 'type' => ['SUV', 'Diesel'], 'favorite' => false],
            ['image' => '/assets/images/car17.png', 'name' => 'Land Rover Discovery', 'year' => '2023', 'price' => '72000', 'location' => 'Alabama', 'type' => ['SUV', 'Gas'], 'favorite' => true],
            ['image' => '/assets/images/car18.png', 'name' => 'Jaguar F-Pace', 'year' => '2022', 'price' => '62000', 'location' => 'New Jersey', 'type' => ['SUV', 'Diesel'], 'favorite' => false],
            ['image' => '/assets/images/car19.png', 'name' => 'Porsche Cayenne', 'year' => '2024', 'price' => '85000', 'location' => 'Tennessee', 'type' => ['SUV', 'Gas'], 'favorite' => true],
            ['image' => '/assets/images/car20.png', 'name' => 'Jeep Wrangler', 'year' => '2023', 'price' => '45000', 'location' => 'Utah', 'type' => ['SUV', 'Hybrid'], 'favorite' => false],
        );
        return view('home.index', [
            'cars' => $cars
        ]);
    }
}
