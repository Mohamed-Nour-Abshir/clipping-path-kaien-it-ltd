<?php

namespace App\Http\Livewire\Admin;

use App\Models\Courses;
use Livewire\Component;

class DeleteCoursesComponent extends Component
{
    public function deleteCourse($id){
        $course = Courses::find($id);
        $course->delete();
        session()->flash('message','Service has been deleted Successfully');
    }
    public function render()
    {
        $courses = Courses::paginate(10);
        return view('livewire.admin.delete-courses-component',['courses'=>$courses])->layout('layouts.admin');
    }
}
