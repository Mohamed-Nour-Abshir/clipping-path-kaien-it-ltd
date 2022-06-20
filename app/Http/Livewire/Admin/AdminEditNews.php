<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditNews extends Component
{
    use WithFileUploads;
    public $name;
    public $short_description;
    public $description;
    public $expiry_date;
    public $image;
    public $news_id;
    public $newimage;

    public function mount($news_id){
        $news = News::find($news_id);
        $this->name = $news->name;
        $this->short_description = $news->short_description;
        $this->description = $news->description;
        $this->expiry_date = $news->expiry_date;
        $this->image = $news->image;
        $this->news_id = $news->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'expiry_date' => 'required|date',
            'image' => 'required'
        ]);
    }

    public function updateNews(){
        $this->validate([
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'expiry_date' => 'required|date',
            'image' => 'required'
        ]);
        $news = News::find($this->news_id);
        $news->name = $this->name;
        $news->short_description = $this->short_description;
        $news->description = $this->description;
        $news->expiry_date = $this->expiry_date;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('News',$imagename);
            $news->image = $imagename;
        }
        $news->save();
        session()->flash('message', 'News has been Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-news')->layout('layouts.admin');
    }
}
