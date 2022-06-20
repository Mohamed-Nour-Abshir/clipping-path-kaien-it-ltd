<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
class AdminManageNews extends Component
{
    use WithPagination;

    public function deleteNews($id){
        $news = News::find($id);
        $news->delete();
        session()->flash('message','News has been deleted Successfully');
    }
    public function render()
    {
        $news = News::paginate(10);
        return view('livewire.admin.admin-manage-news',['news'=>$news])->layout('layouts.admin');
    }
}
