<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Carbon;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddServices extends Component
{
    use WithFileUploads;
    public $service_name;
    public $service_content;
    public $service_image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'service_name' => 'required',
            'service_content' => 'required',
            'service_image' => 'required'
        ]);
    }

    public function storeService(){
        $this->validate([
            'service_name' => 'required',
            'service_content' => 'required',
            'service_image' => 'required'
        ]);
        $service = new Service();
        $service->service_name = $this->service_name;
        $service->service_content = $this->service_content;

        $imagename = Carbon::now()->timestamp.'.'.$this->service_image->extension();
        $this->service_image->storeAs('Service_Images',$imagename);
        $service->service_image = $imagename;
        $service->save();
        session()->flash('message', 'One Service has been added Successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-services')->layout('layouts.admin');
    }
}
