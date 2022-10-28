<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Actions\GenerateReference;
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
    public function getcableprices(){
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->get('https://sandbox.telneting.com/api/cable');
         return $response->json();
         
    }

    public function getCableDetails(Request $request){
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->get('https://sandbox.telneting.com/api/cable/get-customer-details',[
            'cable_type'=>$request->cable_type,
            'decoder_no'=>$request->decoder_no,
         
          ]);
         if($response->status()==200){
             return response()->json(["status"=>'success' ,"renewal_amount"=>$response['renewal_amount'] ,"current_bouquet"=>$response['current_bouquet'],"customer_name"=>$response['customer_name'],"message"=>'Data Feched Successfully']); 
 
         }
         else{
             return response()->json(["status"=>'error',"message"=>$response['message']]); 
 
         }
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
