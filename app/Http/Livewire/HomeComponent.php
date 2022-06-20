<?php

namespace App\Http\Livewire;

use App\Models\BestService;
use App\Models\Service;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        $bestServices = BestService::all();
        return view('livewire.home-component',['services'=>$services, 'bestServices'=>$bestServices])->layout('layouts.base');
    }
}
