<?php

namespace App\Http\Controllers\UserController\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Alert;
use App\Models\Manual_funding;
use Illuminate\Support\Facades\Auth;

class FundWalletController extends Controller
{
    public function fundwallet(){
        $data['user']=Auth()->user();
        $data['alerts'] = Alert::latest()->get();
        $data['pagename']='Fundwallet';
        return view('user.fund-wallet',$data);
        
    }
    public function manualfunding(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'name' => 'required',
            'bank_name' => 'required',
            'amount' => 'required' 
        ]);
 
        Manual_funding::create([
            'account_name' => $request->name,
            'account_number' => $request->account_number,
            'bank_name' => $request->bank_name,
            'amount' => $request->amount,
            'user_id' => Auth::user()->id
        ]);
        return 'success';
        $this->reset();
    }
}
