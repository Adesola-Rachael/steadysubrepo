<?php

namespace App\Http\Controllers\UserController\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alert;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PasswordController extends Controller
{
    public function passwordreset() {
        $data['alerts'] = Alert::latest()->get();

       $data['pagename']='Reset Password';

       return view('user.profile.passwordreset',$data);
   }


   public function changepassword(Request $request) {


    $validator = Validator::make($request->all(),[
        'old_password'=>[
            'required', function($attribute, $value, $fail){
                if( !Hash::check($value, Auth::user()->password) ){
                    return $fail(__('The current password is incorrect'));
                }
            },
            'min:8',
            'max:30'
         ],
         'new_password'=>'required|min:8|max:30',
         'confirm_password'=>'required|same:new_password'
     ],[
         'old_password.required'=>'Enter your current password',
         'old_password.min'=>'Old password must have atleast 8 characters',
         'old_password.max'=>'Old password must not be greater than 30 characters',
         'new_password.required'=>'Enter new password',
         'new_password.min'=>'New password must have atleast 8 characters',
         'new_password.max'=>'New password must not be greater than 30 characters',
         'confirm_password.required'=>'ReEnter your new password',
         'confirm_password.same'=>'New password and Confirm new password must match'
     ]);

    if( !$validator->passes() ){
        return response()->json(['status'=>0,'error'=>$validator->errors()->toArray(),'msg'=>$validator->errors()->toArray() ]);
    }else{
         
     $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->new_password)]);

     if( !$update ){
         return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update password in db']);
     }else{
         return response()->json(['status'=>1,'msg'=>'Your password has been changed successfully']);
     }
    }
}
}
