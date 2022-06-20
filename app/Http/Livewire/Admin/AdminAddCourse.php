<?php

namespace App\Http\Livewire\Admin;

use App\Models\Courses;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddCourse extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
    }

    public function storeCourses(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $course = new Courses();
        $course->name = $this->name;
        $course->description = $this->description;

        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('Courses_Image',$imagename);
        $course->image = $imagename;
        $course->save();
        session()->flash('message', 'One Course has been added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-course')->layout('layouts.admin');
    }
}
