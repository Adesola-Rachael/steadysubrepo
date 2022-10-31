<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Actions\GenerateReference;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alert;
use App\Models\Data;
class DataController extends Controller
{
    public function getbuydata()
    {
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Buy Airtime';
       
        
        return view('user.buydata', $data);
    }
    public function dataprice()
    {
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->get('https://sandbox.telneting.com/api/data');
         return $response->json();
         
    }
   
  public function buydata(Request $request)
    {
        $reference = GenerateReference::generateReference();
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->post('https://sandbox.telneting.com/api/data/buy',[
            'phone'=>$request->phone,
            'network'=>$request->network,
            'plan'=>$request->plan,
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
