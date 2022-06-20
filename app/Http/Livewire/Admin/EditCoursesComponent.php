<?php

namespace App\Http\Livewire\Admin;

use App\Models\Courses;
use Livewire\Component;

class EditCoursesComponent extends Component
{
    public function render()
    {
        $courses = Courses::paginate(5);
        return view('livewire.admin.edit-courses-component',['courses'=>$courses])->layout('layouts.admin');
    }
}
