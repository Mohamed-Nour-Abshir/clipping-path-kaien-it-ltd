<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;

class DeleteNewsComponent extends Component
{
    public function deleteNews($id){
        $news = News::find($id);
        $news->delete();
        session()->flash('message','News has been deleted Successfully');
    }
    public function render()
    {
        $news = News::paginate(10);
        return view('livewire.admin.delete-news-component',['news'=>$news])->layout('layouts.admin');
    }
}
