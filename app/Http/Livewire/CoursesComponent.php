<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use Livewire\Component;

class CoursesComponent extends Component
{
    public function render()
    {
        $courses = Courses::all();
        return view('livewire.courses-component',['courses'=>$courses])->layout('layouts.base');
    }
}
