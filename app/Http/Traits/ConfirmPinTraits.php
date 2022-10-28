<?php
namespace App\Http\Traits;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


trait ConfirmPinTraits{
    public function ConfirmPin(Request $request){
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $pin = Auth::user()->pin;        

        if ($pin == $user_pin) {
            return true;

        } else {
            return false;
        }

    }
    
}