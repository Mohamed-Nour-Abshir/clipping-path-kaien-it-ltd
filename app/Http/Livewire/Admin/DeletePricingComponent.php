<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pricing;
use Livewire\Component;

class DeletePricingComponent extends Component
{
    public function deletePricing($id){
        $price = Pricing::find($id);
        $price->delete();
        session()->flush('message','Pricing has been deleted successfully');
    }
    public function render()
    {
        $prices = Pricing::paginate(10);
        return view('livewire.admin.delete-pricing-component',['prices'=>$prices])->layout('layouts.admin');
    }
}
