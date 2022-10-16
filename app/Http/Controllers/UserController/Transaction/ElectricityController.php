<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ElectricityPrice;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;


class ElectricityController extends Controller
{
    public function electricity()
    {
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Electricity';
        return view('user.electricity', $data);
    }

    public function electricityAPI(Request $request) {
        if($request->t_type == 'verify') {
            $response = Http::withBasicAuth('victorakinode@gmail.com',env('VTPASS_PASSWORD'))->post("https://vtpass.com/api/merchant-verify?serviceID=".$request->service_type."&type=".$request->type."&billersCode=".$request->billersCode);
            return $response->json();
        }
        else {
            $balance = Auth::user()->balance;
            if($balance >= $request->amount) {
                
          
             $response = Http::withBasicAuth('victorakinode@gmail.com',env('VTPASS_PASSWORD'))->post("https://vtpass.com/api/pay?request_id=".$request->request_id."&serviceID=".$request->serviceID."&billersCode=".$request->billersCode."&variation_code=".$request->meter_type."&amount=".intval($request->amount)."&phone=08111111111");
              $rres = json_decode($response);
              if($rres->code == '000') {
                    $this->create_transaction('Electricity Payment', $request->details, 'debit', $request->amount,$request->user_id,$request->name);
                   
                    }
                    else {
                         $this->create_transaction('Failed Transaction', $request->details, 'debit', $request->amount,$request->user_id,$request->name);
                    }
            
            return $response;
            }
            else {
                return "Insufficient Balance";
            }
        }
    }
}
