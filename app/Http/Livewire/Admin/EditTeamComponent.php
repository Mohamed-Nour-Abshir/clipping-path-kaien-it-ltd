<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;

class EditTeamComponent extends Component
{
    public function render()
    {
        $team_members = Team::paginate(10);
        return view('livewire.admin.edit-team-component',['team_members'=>$team_members])->layout('layouts.admin');
    }
}
