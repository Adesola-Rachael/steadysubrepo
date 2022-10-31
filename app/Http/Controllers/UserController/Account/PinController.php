<?php

namespace App\Http\Controllers\UserController\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Validator;

use App\Models\Alert;

class PinController extends Controller
{
    public function pin()
    {
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Change pin';

        // $data['monnify'] = $mm = $this->reserveAccount();
        return view('user.profile.pin', $data);
    }
    // public function setpin()
    // {
    //     $data['alerts'] = Alert::latest()->get();
    //     $data['pagename'] = 'Set pin';

    //     // $data['monnify'] = $mm = $this->reserveAccount();
    //     return view('user.setpin', $data);
    // }
    public function storepin(Request $request){
        $value = $request->value;
        $pin = intval($value);
     
        // dd($current,$new);
        
        $user = User::find(auth()->user()->id);
        $user->pin=$pin;
       if( $user->save()){
        return true;
       }else{
        return 'not_set';
       }        
    }

    public function pinreset($slug)
    {
        $data['alerts'] = Alert::latest()->get();
        
        $data['monnify'] = $mm = $this->reserveAccount();
         $data['monnify'] = $mm = $this->reserveAccount();
        return view('user.pinreset', $data);
    }
    public function changepin(Request $request)
    {   

        $validator = Validator::make($request->all(),[
            'oldpin'=>'required',
            'newpin'=>'required|max:4'

        ]);
        $oldpin=$request->oldpin;
        $newpin=$request->newpin;
        $pin=Auth::user()->pin;

        if($validator->fails()){
            return response()->json(["status"=>0,"message"=>$validator->errors()]); 

        }
        if($oldpin == $pin){
            $user = User::find(auth()->user()->id);
            $user->pin=$newpin;
             if( $user->save()){
                return response()->json(["status"=>1,"message"=>'Transaction Pin Successfully Updated']); 

             }else{
                return response()->json(["status"=>0,"message"=>'Your Pin Is Not Updated']); 

             }
        }else{
            return response()->json(["status"=>0,"message"=>'Your Current Pin Is Incorrect']); 

        }

        // $user = Auth::user();

        // $user->name = $request->name;
        // $user->phone = $request->phone;
        // if ($request->has('image')) {
        //     $image = $request->file('image');
        //     $fileName = $image->hashName();
        //     $image->move(public_path() . '/profilepic/', $fileName);
        //     $user->image = $fileName;
        // } else {
        //     $user->image = Auth::user()->image;
        // }
        // $user->save();

        // $oldpin=$request->oldpin;
        // $confirm_pin=$request->newpin;
        // // return $oldpin.$confirm_pin;

        // return "check reason for no connectio".$oldpin;

        // $validator = Validator::make($request->all(),[
        //     'old_pin'=>[
        //         'required', function($attribute, $value, $fail){
        //             if($value != Auth::user()->pin){
        //                 return $fail(__('The current Pin is incorrect'));
        //             }
        //         },
        //         'max:4'
        //      ],
        //      'new_pin'=>'required|max:4',
        //  ],[
        //     //  'old_pin.required'=>'Enter your current Pin',
        //     //  'new_pin.max'=>'New Pin must have atleast 4 Numbers',
        //     //  'new_pin.required'=>'Enter new pin',
        //  ]);
    
        // if( !$validator->passes() ){
        //     return response()->json(['status'=>0,'error'=>$validator->errors()->toArray(),'msg'=>$validator->errors()->toArray() ]);
        // }else{
             
        //  $update = User::find(Auth::user()->id)->update(['pin'=>$request->new_pin]);
    
        //  if( !$update ){
        //      return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update Pin']);
        //  }else{
        //      return response()->json(['status'=>1,'msg'=>'Your Pin has been changed successfully']);
        //  }
       // }
    

        // $user_pin = '';
        // $user_pin .= $request->first;
        // $user_pin .= $request->second;
        // $user_pin .= $request->third;
        // $user_pin .= $request->fourth;
        // $pin1 = (int)$user_pin;

        // $pin = Auth::user()->pin; 
        
        // $pin = $user->pin;
        // if ($pin == $current) {
        //     $user->pin = $new;
        //     $user->save();
        // } else {
        //     return "not_matched";
        // }

        // if($response->status()==200){
        //     return response()->json(["status"=>'success',"message"=>$response['message']]); 

        // }
        // else{
        //     return response()->json(["status"=>'error',"message"=>$response['message']]); 

       // }

       
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

    public function updatepin(Request $request)
    {
        $user = Auth::user();
        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $user->pin = $pin1;
        $user->save();
    }

    public function confirmpin(Request $request){

        $user_pin = '';
        $user_pin .= $request->first;
        $user_pin .= $request->second;
        $user_pin .= $request->third;
        $user_pin .= $request->fourth;
        $pin1 = (int)$user_pin;

        $pin = Auth::user()->pin;        

        if ($pin == $user_pin) {
            return true;

        } else {
            return "Incorrect Pin";
        }
        
    }
    
    public function forgetpin()
    {
        $user = Auth::user();
        $random = "ABDS7";
        $data = array('name' => $user->name, 'random' => $random);

        Mail::send('mail.resetpin', $data, function ($message) use ($user) {
            $message->to($user->email, '')->subject('Request to change pin');
            $message->from('fafodata@veenodetech.com', 'Fafodata');
        });
    }
    public function resetpin(Request $request)
    {
        $values = explode(",", $request->value);
        if ($values[0] == $values[1]) {
            $user = Auth::user();
            $user->pin = $values[0];
            $user->save();
            return true;
        } else {
            return "not_matched";
        }
    }
    // public function updatepin(Request $request)
    // {
    //     $user = Auth::user();
    //     $user_pin = '';
    //     $user_pin .= $request->first;
    //     $user_pin .= $request->second;
    //     $user_pin .= $request->third;
    //     $user_pin .= $request->fourth;
    //     $pin1 = (int)$user_pin;

    //     $user->pin = $pin1; 
    //     $user->save();
    // }
    // public function pinreset($slug)
    // {
    //     $data['alerts'] = Alert::latest()->get();
        
    //     $data['monnify'] = $mm = $this->reserveAccount();
    //      $data['monnify'] = $mm = $this->reserveAccount();
    //     return view('user.pinreset', $data);
    // }
    // public function changepin(Request $request)
    // {
    //     $value = explode(",", $request->value);
    //     $current = intval($value[0]);
    //     $new = intval($value[1]);
    //     // dd($current,$new);
    //     $user = Auth::user();
    //     $pin = $user->pin;
    //     if ($pin == $current) {
    //         $user->pin = $new;
    //         $user->save();
    //     } else {
    //         return "not_matched";
    //     }
    // }
    // public function forgetpin()
    // {
    //     $user = Auth::user();
    //     $random = "ABDS7";
    //     $data = array('name' => $user->name, 'random' => $random);

    //     Mail::send('mail.resetpin', $data, function ($message) use ($user) {
    //         $message->to($user->email, '')->subject('Request to change pin');
    //         $message->from('steadysub@veenodetech.com', 'Steadyhub');
    //     });
    // }
    // public function resetpin(Request $request)
    // {
    //     $values = explode(",", $request->value);
    //     if ($values[0] == $values[1]) {
    //         $user = Auth::user();
    //         $user->pin = $values[0];
    //         $user->save();
    //         return true;
    //     } else {
    //         return "not_matched";
    //     }
    // }

    public function mypin(Request $request){
        $oldpin=$request->oldpin;
        $newpin=$request->newpin;
        return $newpin.$oldpin;

    }
}
