<?php

namespace App\Http\Livewire\Admin;

use App\Models\Courses;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditCourses extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $course_id;
    public $newimage;

    public function mount($course_id){
        $course = Courses::find($course_id);
        $this->name = $course->name;
        $this->description = $course->description;
        $this->image = $course->image;
        $this->course_id = $course->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
    }

    public function updateCourses(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $course = Courses::find($this->course_id);
        $course->name = $this->name;
        $course->description = $this->description;

        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Courses_Image',$imagename);
            $course->image = $imagename;
        }
        $course->save();
        session()->flash('message', 'One Course has been Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-courses')->layout('layouts.admin');
    }
}
