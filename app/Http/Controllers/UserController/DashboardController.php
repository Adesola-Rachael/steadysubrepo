<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Alert;
use App\Models\Transaction;
use App\Models\Notification;

class DashboardController extends Controller
{
    public function Dashboard()
    
    {
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Dashboard';

        $data['notifications']=Notification::latest()->first();
        $data['transactions'] = Transaction::where('user_id', auth()->user()->id)->get();
        return view('user.dashboard',$data);
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
}
