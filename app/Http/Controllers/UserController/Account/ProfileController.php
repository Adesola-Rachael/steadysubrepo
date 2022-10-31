<?php

namespace App\Http\Controllers\UserController\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alert;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function getprofile()
    {

        $users=User::where('referred_by',auth()->user()->referral_link)->get();
        $data['transactions']=User::find(auth()->user()->id)->transactions()->latest()->take(2)->get();
        $data['referred']=$users->count();
        $data['referral_amount']=$users->where('spent','!=','0')->count()*200;

        // $users=User::where('referred_by',auth()->user()->referral_id)->get();
        // $data['transactions']=User::find(auth()->user()->id)->transactions()->latest()->take(2)->get();
        // $data['referred']=$users->count();
        // $data['referral_amount']=$users->where('spent','!=','0')->count()*200;
        // return view('main.account.profile',$data);

        $data['alerts'] = Alert::latest()->get();

        $data['pagename']='profile';
        return view('user.profile.profile', $data);

    }

    public function editprofile()
    {
        // $data['alerts'] = Alert::latest()->get();
        //  $data['monnify'] = $mm = $this->reserveAccount();

        $data['alerts'] = Alert::latest()->get();

        $data['pagename']='editprofile';

        return view('user.profile.edit_profile',$data);
    }
    public function updateprofile(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->phone = $request->phone;
        if ($request->has('image')) {
            $image = $request->file('image');
            $fileName = $image->hashName();
            $image->move(public_path() . '/profilepic/', $fileName);
            $user->image = $fileName;
        } else {
            $user->image = Auth::user()->image;
        }
        $user->save();
    }
}
