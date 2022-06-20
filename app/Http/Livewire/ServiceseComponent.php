<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceseComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.servicese-component',['services'=>$services])->layout('layouts.base');
    }
}
