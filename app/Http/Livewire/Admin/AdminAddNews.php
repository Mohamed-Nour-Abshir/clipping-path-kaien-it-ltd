<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddNews extends Component
{
    use WithFileUploads;
    public $name;
    public $short_description;
    public $description;
    public $expiry_date;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'expiry_date' => 'required|date',
            'image' => 'required'
        ]);
    }

    public function storeNews(){
        $this->validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'expiry_date' => 'required|date',
            'image' => 'required'
        ]);
        $news = new News();
        $news->name = $this->name;
        $news->short_description = $this->short_description;
        $news->description = $this->description;
        $news->expiry_date = $this->expiry_date;

        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('News',$imagename);
        $news->image = $imagename;
        $news->save();
        session()->flash('message', 'News has been added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-news')->layout('layouts.admin');
    }
}
