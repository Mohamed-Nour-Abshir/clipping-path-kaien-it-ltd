<?php

namespace App\Http\Livewire\Admin;

use App\Models\BestService;
use Livewire\Component;

class EditBestServiceComponent extends Component
{
    public function render()
    {
        $bestServices = BestService::paginate(10);
        return view('livewire.admin.edit-best-service-component',['bestServices'=>$bestServices])->layout('layouts.admin');
    }
}
