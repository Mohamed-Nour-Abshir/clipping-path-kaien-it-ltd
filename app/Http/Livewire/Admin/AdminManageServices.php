<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;
class AdminManageServices extends Component
{
    use WithPagination;
    public function deleteService($id){
        $service = Service::find($id);
        $service->delete();
        session()->flash('message','Service has been deleted Successfully');
    }
    public function render()
    {
        $services = Service::paginate(5);
        return view('livewire.admin.admin-manage-services',['services'=>$services])->layout('layouts.admin');
    }
}
