<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Actions\GenerateReference;
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
    public function getElectricityDetails(Request $request){
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->get('https://sandbox.telneting.com/api/electricity/get-customer-details',[
            'service_type'=>$request->service_type,
            'meter_type'=>$request->meter_type,
            'meter_no'=>$request->meter_no,
         
          ]);
         if($response->status()==200){
             return response()->json(["status"=>'success',"address"=>$response['address'],"customer_name"=>$response['customer_name'],"message"=>'Data Feched Successfully']); 
 
         }
         else{
             return response()->json(["status"=>'error',"message"=>$response['message']]); 
 
         }
    }

    public function postelectricity(Request $request) {

        $reference = GenerateReference::generateReference();
            $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->post('https://sandbox.telneting.com/api/electricity/buy',[
           'service_type'=>$request->service_type,
           'meter_type'=>$request->meter_type,
           'amount'=>$request->amount,
           'meter_no'=>$request->meter_no,
           'reference'=>$reference,
        
         ]);
        if($response->status()==200){
            return response()->json(["status"=>'success',"message"=>$response['message']]); 

        }
        else{
            return response()->json(["status"=>'error',"message"=>$response['message']]); 

        }
    }
}
