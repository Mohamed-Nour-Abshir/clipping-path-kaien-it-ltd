<?php

namespace App\Http\Livewire\Admin;

use App\Models\BuyService;
use Livewire\Component;

class AdminManageOrders extends Component
{
    public function render()
    {
        $orders = BuyService::OrderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-manage-orders',['orders'=>$orders])->layout('layouts.admin');
    }
}
