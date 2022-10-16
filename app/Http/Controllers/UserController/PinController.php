<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;

class PinController extends Controller
{
    public function pin()
    {
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Change pin';

        // $data['monnify'] = $mm = $this->reserveAccount();
        return view('user.pin', $data);
    }
    public function setpin()
    {
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Set pin';

        // $data['monnify'] = $mm = $this->reserveAccount();
        return view('user.setpin', $data);
    }
    public function storepin(Request $request){
        $value = $request->value;
        $pin = intval($value);
     
        // dd($current,$new);
        
        $user = User::find(auth()->user()->id);
        $user->pin=$pin;
       if( $user->save()){
        return true;
       }else{
        return 'not_set';
       }
        

        
    }
        
    
    
    // public function pinreset($slug)
    // {
    //     $data['alerts'] = Alert::latest()->get();
        
    //     $data['monnify'] = $mm = $this->reserveAccount();
    //      $data['monnify'] = $mm = $this->reserveAccount();
    //     return view('user.pinreset', $data);
    // }
    // public function changepin(Request $request)
    // {
    //     $value = explode(",", $request->value);
    //     $current = intval($value[0]);
    //     $new = intval($value[1]);
    //     // dd($current,$new);
    //     $user = Auth::user();
    //     $pin = $user->pin;
    //     if ($pin == $current) {
    //         $user->pin = $new;
    //         $user->save();
    //     } else {
    //         return "not_matched";
    //     }
    // }
    // public function forgetpin()
    // {
    //     $user = Auth::user();
    //     $random = "ABDS7";
    //     $data = array('name' => $user->name, 'random' => $random);

    //     Mail::send('mail.resetpin', $data, function ($message) use ($user) {
    //         $message->to($user->email, '')->subject('Request to change pin');
    //         $message->from('steadysub@veenodetech.com', 'Steadyhub');
    //     });
    // }
    // public function resetpin(Request $request)
    // {
    //     $values = explode(",", $request->value);
    //     if ($values[0] == $values[1]) {
    //         $user = Auth::user();
    //         $user->pin = $values[0];
    //         $user->save();
    //         return true;
    //     } else {
    //         return "not_matched";
    //     }
    // }
}
