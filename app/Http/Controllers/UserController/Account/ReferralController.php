<?php

namespace App\Http\Controllers\UserController\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alert;
use Illuminate\Support\Facades\Auth;


class ReferralController extends Controller
{
    public function Referral ()
    {
        $data['referral']=User::where('referred_by', auth()->user()->referral_link)->get(['name','created_at']);
        $data['alerts'] = Alert::latest()->get();

        $data['pagename']='Referrals';
        $users=User::where('referred_by',auth()->user()->referral_link)->get();
        $data['referred']=$users->count();

        

        return view('user.profile.referral', $data);
    }

}
