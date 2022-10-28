<?php

namespace App\Http\Controllers\UserController\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Actions\GenerateReference;

use App\Models\User;
use App\Models\Alert;


class ExamController extends Controller
{
    public function exam()
    {
        $data['user'] = Auth::user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Exam Pin';
        return view('user.exam', $data);
    }
    public function Examprices(){
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->get('https://sandbox.telneting.com/api/exampin');
         return $response->json();

    }

    public function buy_pin(Request $request)
    {
        $reference = GenerateReference::generateReference();
        $response=Http::withToken('9k8OvuqCgICKZl3snOKAmeYCaDCUpPmmX9Dk27iz')->accept('application/json')->post('https://sandbox.telneting.com/api/exampin/buy',[
      
            'type'=>$request->type,
          'reference'=>$reference,
       
        ]);
        if($response->status()==200){
             return response()->json([
                "status"=>'success',
                "title"=>$response['title'],
                "pin"=>$response['pin'],
                "message"=>$response['message']
            ]); 

      }
      else{
          return response()->json(["status"=>'error',"message"=>$response['message']]); 

      }
      //  return $response->json();

       
    }
               
}
