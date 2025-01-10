<?php

namespace App\View\Components;

use App\Models\FuelType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FuelTypeSelector extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $fuelTypes = FuelType::get();
        return view('components.selector',
    [
            "items" => $fuelTypes,
            "name" => "fuel_type_id",
            "placeholder" => "Fuel Type"
    ]);
    }
}
