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
