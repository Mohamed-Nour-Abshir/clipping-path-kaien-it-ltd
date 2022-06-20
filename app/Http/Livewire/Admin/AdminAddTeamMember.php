<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddTeamMember extends Component
{
    use WithFileUploads;
    public $name;
    public $title;
    public $facebook;
    public $linkedin;
    public $instgram;
    public $twitter;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'title' => 'required',
            'image' => 'required'
        ]);
    }

    public function storeMember(){
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required'
        ]);
        $team = new Team();
        $team->name = $this->name;
        $team->title = $this->title;
        $team->facebook = $this->facebook;
        $team->linkedin = $this->linkedin;
        $team->instgram = $this->instgram;
        $team->twitter = $this->twitter;

        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('Team',$imagename);
        $team->image = $imagename;
        $team->save();
        session()->flash('message', 'A New Team Member has been added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-team-member')->layout('layouts.admin');
    }
}
