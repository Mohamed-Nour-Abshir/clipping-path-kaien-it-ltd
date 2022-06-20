<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        $team_members = Team::all();
        return view('livewire.team-component',['team_members'=>$team_members])->layout('layouts.base');
    }
}
