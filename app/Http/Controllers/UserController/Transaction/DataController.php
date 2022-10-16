<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;
use App\Models\Data;
class DataController extends Controller
{
    public function buydata()
    {
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Buy Airtime';
        $data['datas'] = $dd=  Data::orderBy("actual_price")->get();
       
        
        return view('user.buydata', $data);
    }
    public function searchdata(Request $request)
    {
        $val = $request->val;
        $data = Data::where('network', $val)->orderBy('actual_price')->get();
        return $data;
    }
   
  public function buydata2(Request $request)
    {
      
        $phone = $request->phone;
        $network = $request->network;
        $val = substr($phone, 0, 4);
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;
        $user = Auth::user();
        $balance = $user->balance;
        $pin = $user->pin;
        $amount = $request->amount;

        $totalF = AdminFund::find(1);
        $adminbalance = $totalF->balance;
       

        if ($pin == $pin1) {
            if ($balance > intval($amount) && intval($amount) >= 100) {
                if(intval($adminbalance) < intval($amount)) {
                    return 'low_balance';
                }
                else {
                    
                //Check for duplicate transaction
            
                    
                    $reference = 'tranx' . Str::random(8);

                    $network_id = $request->network_id;
                    $phone = $request->phone;
                    $plan_id = $request->plan_id;
                    $name = $request->name;
                    $request_body = [
                        "dataplan" => intval($plan_id),
                        "network" => intval($network_id),
                        "mobileno" => $phone,
                        "client_reference" => $reference
                        ];
                        
                    
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://easyaccessapi.com.ng/api/data.php",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS => array(
                            'network' => intval($network_id),
                            'mobileno' => $phone,
                            'dataplan' => intval($plan_id),
                            'client_reference' => $reference, //update this on your script to receive webhook notifications
                        ),
                        CURLOPT_HTTPHEADER => array(
                            "AuthorizationToken: ".env("EASY_ACCESS_TOKEN"),
                            "cache-control: no-cache"
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                       $rres = json_decode($response);
                    
                    if($rres->success == 'false') {
                    $the_id = $this->create_transaction('Failed Transaction', $request->details, 'debit', $amount,$request->user_id,$request->phonesmall);
                        
                    } else {
                    $the_id = $this->create_transaction('Data Subscription', $request->details, 'debit', $amount,$request->user_id,$request->phonesmall);
                        
                    }
                   
                  
                  return $the_id;
                  
                  
                    return $response;
}
                
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }
    }
}
