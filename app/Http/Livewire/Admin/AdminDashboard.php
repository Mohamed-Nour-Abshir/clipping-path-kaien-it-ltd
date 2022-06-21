<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use App\Models\Service;
use Livewire\Component;
use App\Models\BuyService;
use Livewire\WithPagination;

class AdminDashboard extends Component
{
    use WithPagination;
    public function download($id){
        $download = BuyService::find($id);
        $pathToFile = public_path('assets/images/BuyServices/' . $download->images);
        return response()->download($pathToFile, $download->images);
    }
    public function render()
    {
        $services = Service::orderBy('created_at','desc')->get();
        $orders = BuyService::orderBy('created_at','desc')->paginate(5);
        return view('livewire.admin.admin-dashboard',['services'=>$services,'orders'=>$orders])->layout('layouts.admin');
    }
}
