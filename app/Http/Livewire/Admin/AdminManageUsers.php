<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminManageUsers extends Component
{
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        session()->flush('message','One User has been deleted successfully');
    }
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.admin-manage-users',['users'=>$users])->layout('layouts.admin');
    }
}
