<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditServices extends Component
{
    use WithFileUploads;
    public $service_name;
    public $service_content;
    public $service_image;
    public $newserviceimage;
    public $service_id;

    public function mount($service_id){
        $sevice = Service::find($service_id);
        $this->service_name = $sevice->service_name;
        $this->service_content = $sevice->service_content;
        $this->service_image = $sevice->service_image;
        $this->service_id = $sevice->id;
    }

    public function updateService(){
        $service = Service::find($this->service_id);
        $service->service_name = $this->service_name;
        $service->service_content = $this->service_content;
        if($this->newserviceimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newserviceimage->extension();
            $this->newserviceimage->storeAs('services',$imagename);
            $service->service_image = $imagename;
        }
       $service->save();
       session()->flash('message', 'Service has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-services')->layout('layouts.admin');
    }
}
