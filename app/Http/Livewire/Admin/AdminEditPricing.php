<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pricing;
use Livewire\Component;

class AdminEditPricing extends Component
{
    public $name;
    public $price;
    public $duration;
    public $tags;
    public $pricing_id;

    public function mount($pricing_id){
        $price = Pricing::find($pricing_id);
        $this->name = $price->name;
        $this->price = $price->price;
        $this->duration = $price->duration;
        $this->tags = $price->tags;
        $this->pricing_id = $price->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'tags' => 'required|'
        ]);
    }

    public function updatePricing(){
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'tags' => 'required|'
        ]);
        $price = Pricing::find($this->pricing_id);
        $price->name = $this->name;
        $price->duration = $this->duration;
        $price->price = $this->price;
        $price->tags = $this->tags;
        $price->save();
        session()->flash('message', 'Pricing has been Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-pricing')->layout('layouts.admin');
    }
}
