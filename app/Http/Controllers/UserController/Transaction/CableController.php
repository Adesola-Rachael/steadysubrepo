<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Alert;

class CableController extends Controller
{
    public function cable()
    {
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Cable Subscription';
        return view('user.cable', $data);
    }
    
    public function buycable2(Request $request)
    {
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $balance = Auth::user()->balance;
        $pin = Auth::user()->pin;
        $amount = $request->amount;
        $cable_type = $request->cable_type;
        $decoder_no = $request->decoder_no;
        $user = Auth::user();
        $totalF = AdminFund::find(1);
        $adminbalance = $totalF->balance;


        if ($pin == $user_pin) {
            if ($balance > intval($amount) && intval($adminbalance) > intval($amount) && intval($amount) >= 100) {
                return 'success';
               
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }
    
}
