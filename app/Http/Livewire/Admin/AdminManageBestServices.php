<?php

namespace App\Http\Livewire\Admin;

use App\Models\BestService;
use Livewire\Component;
use Livewire\WithPagination;

class AdminManageBestServices extends Component
{
    use WithPagination;
    public function deleteBestService($id){
        $bestService = BestService::find($id);
        $bestService->delete();
        session()->flash('message','Service has been deleted Successfully');
    }
    public function render()
    {
        $bestServices = BestService::paginate(5);
        return view('livewire.admin.admin-manage-best-services',['bestServices'=>$bestServices])->layout('layouts.admin');
    }
}
