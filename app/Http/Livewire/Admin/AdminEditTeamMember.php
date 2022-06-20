<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditTeamMember extends Component
{
    use WithFileUploads;
    public $name;
    public $title;
    public $facebook;
    public $linkedin;
    public $instgram;
    public $twitter;
    public $image;
    public $member_id;
    public $newimage;

    public function mount($member_id){
        $team_member = Team::find($member_id);
        $this->name = $team_member->name;
        $this->title = $team_member->title;
        $this->facebook = $team_member->facebook;
        $this->twitter = $team_member->twitter;
        $this->instgram = $team_member->instgram;
        $this->linkedin = $team_member->linkedin;
        $this->image = $team_member->image;
        $this->member_id = $team_member->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'title' => 'required',
            'image' => 'required'
        ]);
    }

    public function updateMember(){
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required'
        ]);
        $team_member = Team::find($this->member_id);
        $team_member->name = $this->name;
        $team_member->title = $this->title;
        $team_member->facebook = $this->facebook;
        $team_member->linkedin = $this->linkedin;
        $team_member->instgram = $this->instgram;
        $team_member->twitter = $this->twitter;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Team',$imagename);
            $team_member->image = $imagename;
        }
        $team_member->save();
        session()->flash('message', 'One Team Member data has been Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-team-member')->layout('layouts.admin');
    }
}
