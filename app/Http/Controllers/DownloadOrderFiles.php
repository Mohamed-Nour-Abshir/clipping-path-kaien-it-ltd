<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadOrderFiles extends Controller
{
    public function download($id){
        $download = BuyService::find($id);
        $pathToFile = storage_path('assets/images/BuyServices/' . $download->images);
        return response()->download($pathToFile);
    }
}
