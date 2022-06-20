<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pricing;
use Livewire\Component;

class EditPricingComponent extends Component
{
    public function render()
    {
        $prices = Pricing::paginate(10);
        return view('livewire.admin.edit-pricing-component',['prices'=>$prices])->layout('layouts.admin');
    }
}
