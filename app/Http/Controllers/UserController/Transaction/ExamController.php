<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;
use App\Models\ExamPin;


class ExamController extends Controller
{
    public function exam()
    {
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Exam Pin';
        $data['exams'] = ExamPin::get();
        return view('user.exam', $data);
    }
     public function buypin(Request $request)
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
        $exam_type = $request->exam_type;
        $package = $request->package;
        $totalF = AdminFund::find(1);
        $adminbalance = $totalF->balance;

        $user = Auth::user();
        if ($pin == $user_pin) {
            if ($balance > intval($amount) && intval($adminbalance) > intval($amount) && intval($amount) >= 100) {
              
                  
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => $request->serviceID,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS => array(
                            'no_of_pins' => 1,
                        ),
                        CURLOPT_HTTPHEADER => array(
                            "AuthorizationToken: ".env("EASY_ACCESS_TOKEN"),
                            "cache-control: no-cache"
                        ),
                    ));
                    $response = curl_exec($curl);


                    $r_pin = $response;
                    $r_amount = $amount;

                     $rres = json_decode($response);
                    if($rres->success == 'true') {
                    $this->create_transaction('Exam Pin Purchase', $request->details, 'debit', $amount,$request->user_id,$request->name);
                     $data = array('name' => Auth::user()->name, 'pin' => $rres->pin, 'amount' => $r_amount);
                    Mail::send('mail.exam', $data, function ($message) use ($user) {
                        $message->to($user->email, 'Fafodata')->subject('Exam Pin Details');
                        $message->from('support@fafodata.com', 'Fafodata');
                    });
                    }
                    else {
                         $this->create_transaction('Failed Transaction', $request->details, 'debit', $amount,$request->user_id,$request->name);
                    }

                  
                  
                    return $response;
                
            } else {
                return "Insufficient Balance";
            }
        } else {
            return "Incorrect Pin";
        }

    }
}
