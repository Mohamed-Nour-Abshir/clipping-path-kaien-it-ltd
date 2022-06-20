<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
    }
    public function ContactUs(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Thanks for your contact, Your Message has been sent to us successfully!');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
