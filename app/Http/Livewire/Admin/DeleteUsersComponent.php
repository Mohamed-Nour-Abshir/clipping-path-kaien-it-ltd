<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DeleteUsersComponent extends Component
{
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        session()->flush('message','One User has been deleted successfully');
    }
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.admin.delete-users-component',['users'=>$users])->layout('layouts.admin');
    }
}
