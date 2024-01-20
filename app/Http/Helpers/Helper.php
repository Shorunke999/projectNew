<?php
namespace App\Http\Helpers;

use Illuminate\Http\Request;
use App\Jobs\Mailjob;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthMail; 

class Helper {

    public static function Mail(Request $request)
    {
        Mailjob::dispatch($request);
        //Mail::to($request->email)->send(new AuthMail()); 
    }
}
