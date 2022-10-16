<?php
namespace App\Http\Controllers\UserController\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Transaction;
use App\Models\User;

use Paystack;
use App\Actions\Transaction\CreditUserWalletAction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    public function handleGatewayCallback() 
    {
        $paymentDetails = Paystack::getPaymentData();

        $email = $paymentDetails['data']['customer']['email'];
        $amount = (int)$paymentDetails['data']['amount'];
        $amount = $amount / 100;
        $amount = $amount > 2538 ? ($amount - 100) * 0.9853 : ($amount * 0.9853);
        $amount = (int)$amount;


        $user = User::where('email', $email)->get()->first();


        if ($paymentDetails['status'] == true) {


            $before = CreditUserWalletAction::credit($amount, $user);
            Transaction::create([
                'user_id' => $user->id,
                'reference' => $paymentDetails['data']['reference'],
                'status' => 'success',
                'before' => $before,
                'after' => $user->balance,
                'title' => 'Funding Wallet Through Paystack',
                'service_type' => 'Wallet Fund',
                'description' => 'Account Funded through paystack, amount: #' . number_format($amount),
                'amount' => $amount
            ]);

            return redirect()->to('fund-wallet')->with(['success' => 'Your Account has been funded with ₦' . number_format($amount)]);
        } else {

            Transaction::create([
                'user_id' => $user->id,
                'reference' => $paymentDetails['data']['reference'],
                'status' => 'failed',
                'before' => $user->balance,
                'after' => $user->balance,
                'title' => 'Failed Funding Wallet Through Paystack',
                'service_type' => 'Wallet Fund',
                'description' => 'Account Funding through paystack failed, amount: #' . number_format($amount),
                'amount' => $amount
            ]);
             return redirect()->to('fund-wallet')->with(['error' => 'Your Account was not funded due to an error ']);
        }
    }
    

   
}
