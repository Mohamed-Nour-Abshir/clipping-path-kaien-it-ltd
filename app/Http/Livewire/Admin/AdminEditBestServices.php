<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\BestService;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditBestServices extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $bestservice_id;
    public $newimage;

    public function mount($bestservice_id){
        $bestService = BestService::find($bestservice_id);
        $this->name = $bestService->name;
        $this->description = $bestService->description;
        $this->image = $bestService->image;
        $this->bestservice_id = $bestService->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
    }

    public function updatebestServices(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $bestService = BestService::find($this->bestservice_id);
        $bestService->name = $this->name;
        $bestService->description = $this->description;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('BestServices',$imagename);
            $bestService->image = $imagename;
        }
        $bestService->save();
        session()->flash('message', 'One Best Service has been Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-best-services')->layout('layouts.admin');
    }
}
