<?php

namespace App\Http\Livewire;

use App\Mail\OrderConfirmation;
use Livewire\Component;
use App\Models\BuyService;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class BuyServicesComponent extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $country;
    public $servicetype;
    public $imagesno;
    public $needresized;
    public $images;
    public $instruction;

    public function updated($fields){
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'servicetype' => 'required',
            'imagesno' => 'required',
            'needresized' => 'required',
            'images' => 'required|image',
            'instruction' => 'required'
        ]);
    }
    public function BuyServices(){
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'servicetype' => 'required',
            'imagesno' => 'required',
            'needresized' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'instruction' => 'required'
        ]);
        $buyservice = new BuyService();
        $buyservice->firstname = $this->firstname;
        $buyservice->lastname = $this->lastname;
        $buyservice->email = $this->email;
        $buyservice->phone = $this->phone;
        $buyservice->country = $this->country;
        $buyservice->servicetype = $this->servicetype;
        $buyservice->imagesno = $this->imagesno;
        $buyservice->needresized = $this->needresized;
        $buyservice->instruction = $this->instruction;
        if($this->images){
            $imagesname = '';
            foreach($this->images as $key=>$image){
                $imgName = Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('BuyServices',$imgName);
                $imagesname = $imagesname . ',' .$imgName;
            }
            $buyservice->images = $imagesname;
        }
        $buyservice->save();
        session()->flash('message','Thanks for your order we get your order and we will reply you soon');
    }
    public function render()
    {
        return view('livewire.buy-services-component')->layout('layouts.base');
    }
}
