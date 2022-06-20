<?php

namespace App\Http\Livewire\Admin;

use App\Models\Courses;
use Livewire\Component;

class AdminManageCourses extends Component
{
    public function deleteCourse($id){
        $course = Courses::find($id);
        $course->delete();
        session()->flash('message','Service has been deleted Successfully');
    }
    public function render()
    {
        $courses = Courses::paginate(5);
        return view('livewire.admin.admin-manage-courses',['courses'=>$courses])->layout('layouts.admin');
    }
}
