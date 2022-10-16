<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;
use App\Models\Airtime;
use App\Models\AirtimePrice;
use App\Models\Transaction;






class airtimeController extends Controller
{
    //
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

    public function getdiscount2(Request $request)
    {
       
        $value = $request->value;
        $values = explode(",", $value);
       
        if ($values[1] == 'airtime') {
            $airtime = AirtimePrice::where('network', $values[0])->first()->set_price;

            return $airtime;
        } elseif ($values[1] == "data") {
        } elseif ($values[1] == "electricity") {
            $elec = ElectricityPrice::where('name', $values[0])->first()->set_price;
            return $elec;
        } elseif ($values[1] == "tv") {
            $tv = TvPrice::where('name', $values[0])->first()->set_price;

            return $tv;
        } else {
            return false;
        }
    }



public function buyairtime2(Request $request)
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
        $totalF = AdminFund::find(1);
        $adminbalance = $totalF->balance;

        $balance = $user->balance;
        $pin = $user->pin;

        $amount = $request->amount;
        if ($pin == $user->pin) {
            if ( $balance > $amount && $amount >= 100) {
                if($adminbalance < $amount ) {
                    return 'low_balance';
                }
                else {
                    
                
                    $reference = 'tranx' . Str::random(8);

                    $network_id = $request->serviceID;
                    $phone = $request->phone;
                    $plan_id = $request->plan_id;
                    $name = $request->name;
                    if ($network_id == 'MTN') {
                        $network_id = '01';
                    } elseif ($network_id == 'GLO') {
                        $network_id = '02';
                    } elseif ($network_id == 'AIRTEL') {
                        $network_id = '03';
                     } elseif ($network_id == '9MOBILE') {
                        $network_id = '04';
                    } else {
                      return false;
                    }


                    // dd($request_body,$request->all(), env('EASY_ACCESS_TOKEN'));

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://easyaccessapi.com.ng/api/airtime.php",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS => array(
                            'network' => intval($network_id),
                            'amount' => $amount,
                            'mobileno' => $phone,
                            'airtime_type' => '001',
                            'client_reference' => $reference,
                        ),
                        CURLOPT_HTTPHEADER => array(
                            "AuthorizationToken: ".env("EASY_ACCESS_TOKEN"),
                            "cache-control: no-cache"
                        ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $rres = json_decode($response);
                    if($rres->success == 'true') {
                         $the_id = $this->create_transaction('Airtime Subscription', $request->details, 'debit', $amount,$request->user_id,$request->phonesmall);
                   
                        
                    } else {
                    $the_id = $this->create_transaction('Failed Transaction', $request->details, 'debit', $amount,$request->user_id,$request->phonesmall);
                        
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