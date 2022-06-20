<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\BestService;

class DeleteBestServiceComponent extends Component
{
    public function deleteBestService($id){
        $bestService = BestService::find($id);
        $bestService->delete();
        session()->flash('message','Service has been deleted Successfully');
    }
    public function render()
    {
        $bestServices = BestService::paginate(10);
        return view('livewire.admin.delete-best-service-component',['bestServices'=>$bestServices])->layout('layouts.admin');
    }
}
