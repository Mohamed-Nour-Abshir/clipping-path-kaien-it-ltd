<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\BuyService;
use Illuminate\Support\Facades\Storage;

class AdminManageOrders extends Component
{
    public function download($id){
        $download = BuyService::find($id);
        $pathToFile = public_path('assets/images/BuyServices/' . $download->images);
        return response()->download($pathToFile, $download->images);
    }
    public function render()
    {
        $orders = BuyService::OrderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-manage-orders',['orders'=>$orders])->layout('layouts.admin');
    }
}
