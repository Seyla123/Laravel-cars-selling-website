<?php

namespace App\View\Components;

use App\Models\CarType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarTypeSelector extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $placeholder="Car Type", public string|bool $label=false)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $carTypes = CarType::get();
        return view('components.selector',[
            "items"=> $carTypes,
            "name"=>"car_type_id",
        ]);
    }
}
