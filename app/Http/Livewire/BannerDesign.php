<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BannerDesign extends Component
{
    public function render()
    {
        return view('livewire.banner-design')->layout('layouts.base');
    }
}
