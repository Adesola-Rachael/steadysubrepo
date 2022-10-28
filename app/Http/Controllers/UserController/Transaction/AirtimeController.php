<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\GenerateReference;
use validator;
// use App\Http\Traits\ConfirmPinTraits;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;
use App\Models\Airtime;
use App\Models\AirtimePrice;
use App\Models\Transaction;

class AirtimeController extends Controller
{
    
    public function getbuyairtime()
    {
        
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Buy Airtime';

        $data['discount'] = AirtimePrice::pluck('set_price');
       
        return view('user.buyairtime', $data);
    }
    public function buyairtime(Request $request)
    {

         $reference = GenerateReference::generateReference();
            $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->post('https://sandbox.telneting.com/api/airtime/buy',[
           'phone'=>$request->phone,
           'network'=>$request->network,
           'amount'=>$request->amount,
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
