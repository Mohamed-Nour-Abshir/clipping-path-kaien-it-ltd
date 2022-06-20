<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageMasking extends Component
{
    public function render()
    {
        return view('livewire.image-masking')->layout('layouts.base');
    }
}
