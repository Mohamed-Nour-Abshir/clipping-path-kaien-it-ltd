<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class EditServicesComponent extends Component
{
    public function render()
    {
        $services = Service::paginate(5);
        return view('livewire.admin.edit-services-component',['services'=>$services])->layout('layouts.admin');
    }
}
