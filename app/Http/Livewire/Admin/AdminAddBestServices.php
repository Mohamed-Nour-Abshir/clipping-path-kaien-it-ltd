<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\BestService;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddBestServices extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
    }

    public function storeBestService(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $bestService = new BestService();
        $bestService->name = $this->name;
        $bestService->description = $this->description;

        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('BestServices',$imagename);
        $bestService->image = $imagename;
        $bestService->save();
        session()->flash('message', 'A new Best Service has been added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-best-services')->layout('layouts.admin');
    }
}
