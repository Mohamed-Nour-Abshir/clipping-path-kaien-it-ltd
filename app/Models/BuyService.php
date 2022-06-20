<?php

namespace App\Models;

use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuyService extends Model
{
    use HasFactory;
    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "mdnourabshir@gmail.com";
            Mail::to($adminEmail)->send(new OrderConfirmation($item));
        });
    }
}
