<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;

class AdminManageTeam extends Component
{
    public function deleteTeamMember($id){
        $team_member = Team::find($id);
        $team_member->delete();
        session()->flush('message','One Member has been deleted successfully');
    }
    public function render()
    {
        $team_members = Team::paginate(5);
        return view('livewire.admin.admin-manage-team',['team_members'=>$team_members])->layout('layouts.admin');
    }
}
