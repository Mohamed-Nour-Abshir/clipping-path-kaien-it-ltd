<?php

namespace App\Http\Livewire;

use App\Models\Pricing;
use Livewire\Component;

class PricingComponent extends Component
{
    public function render()
    {
        $prices = Pricing::all();
        return view('livewire.pricing-component',['prices'=>$prices])->layout('layouts.base');
    }
}
