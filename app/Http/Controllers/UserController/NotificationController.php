<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alert;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function Notification()
    {
        $data['alerts'] = Alert::latest()->get();
        $data['pagename'] = 'Notifications';

        // $data['monnify'] = $mm = $this->reserveAccount();
        $data['notif'] = Notification::get();
        return view('user.notification', $data);
    }

}
