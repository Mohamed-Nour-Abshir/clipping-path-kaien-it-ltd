<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pricing;
use Livewire\Component;

class AdminManagePricing extends Component
{
    public function deletePricing($id){
        $pricing = Pricing::find($id);
        $pricing->delete();
        session()->flush('message','pricing has been deleted successfully');
    }
    public function render()
    {
        $prices = Pricing::paginate(5);
        return view('livewire.admin.admin-manage-pricing',['prices'=>$prices])->layout('layouts.admin');
    }
}
