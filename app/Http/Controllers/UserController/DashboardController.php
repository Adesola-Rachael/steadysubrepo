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
    
}
