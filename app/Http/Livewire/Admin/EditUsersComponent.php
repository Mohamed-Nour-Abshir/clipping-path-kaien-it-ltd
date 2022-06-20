<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class EditUsersComponent extends Component
{
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.admin.edit-users-component',['users'=>$users])->layout('layouts.admin');
    }
}
