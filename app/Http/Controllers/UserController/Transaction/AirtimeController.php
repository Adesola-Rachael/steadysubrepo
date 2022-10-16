<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;
use App\Models\Airtime;
use App\Models\AirtimePrice;
use App\Models\Transaction;

class AirtimeController extends Controller
{
    
    public function buyairtime()
    {
        
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Buy Airtime';

        $data['discount'] = AirtimePrice::pluck('set_price');
        // $data['monnify'] = $mm = $this->reserveAccount();
        // dd($mm);
        // $data['monnify'] = $mm = $this->reserveAccount()['responseBody']['accounts'][0];
       
        return view('user.buyairtime', $data);
    }

   

    public function checkpin(Request $request)
    {
        $pin = Auth::user()->pin;
        if ($pin == null) {
            return true;
        } else {
            return false;
        }
    }

}
