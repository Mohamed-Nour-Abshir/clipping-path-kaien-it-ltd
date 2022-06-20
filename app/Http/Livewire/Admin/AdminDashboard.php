<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboard extends Component
{
    use WithPagination;
    public function render()
    {
        $services = Service::orderBy('created_at','desc')->paginate(5);
        $contacts = Contact::orderBy('created_at','desc')->paginate(5);
        return view('livewire.admin.admin-dashboard',['services'=>$services,'contacts'=>$contacts])->layout('layouts.admin');
    }
}
