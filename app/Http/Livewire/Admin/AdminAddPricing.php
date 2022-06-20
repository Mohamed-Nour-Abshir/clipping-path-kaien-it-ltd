<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pricing;
use Livewire\Component;

class AdminAddPricing extends Component
{
    public $name;
    public $price;
    public $duration;
    public $tags = [];

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'tags' => 'required'
        ]);
    }

    public function storePrice(){
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'tags' => 'required'
        ]);
        $pricing = new Pricing();
        $pricing->name = $this->name;
        $pricing->price = $this->price;
        $pricing->duration = $this->duration;
        $pricing->tags = implode(',',$this->tags);
        $pricing->save();
        session()->flash('message', 'Pricing has been added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-pricing')->layout('layouts.admin');
    }
}
