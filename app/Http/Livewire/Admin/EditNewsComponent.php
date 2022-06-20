<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;

class EditNewsComponent extends Component
{
    public function render()
    {
        $news = News::paginate(10);
        return view('livewire.admin.edit-news-component',['news'=>$news])->layout('layouts.admin');
    }
}
