<?php

namespace App\Http\Controllers\Main\Webhooks\Monnify;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Services\Transaction\CreditUserWalletService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionCompleteWebhook extends Controller
{
    public function index(Request $request)
    {


        // $request = $request->input('eventData');
        // activity()->log('Request Made from Monniepoint for --' . $request['paymentReference']);

        // if ($request['transactionHash'] != hash_hmac('sha512', $request, env('MONNIFY_SECRET_KEY'))) {
        //     return response(['message'=>'Failed to pass hash test'],200);
        // }

        try {
            $response = Http::withHeaders([
                // 'Authorization' => 'Basic ' . base64_encode(env("MONNIFY_API_TOKEN"))
                'Authorization' => 'Basic ' . base64_encode(env('MONNIFY_API_KEY') . ':' . env('MONNIFY_SECRET_KEY'))
            ])->post(env('MONNIFY_URL') . '/api/v1/auth/login');
            // activity()->log('Login Request --' . $request['paymentReference']);
        } catch (Exception $e) {

            return response([], 500);
        }


        $access_token = $response['responseBody']['accessToken'];

        try {
            $response = Http::withHeaders([

                'Authorization' => 'Bearer ' . $access_token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',

            ])->get(env('MONNIFY_URL') . '/api/v1/merchant/transactions/query', [
                'paymentReference' => $request['paymentReference'],

            ]);
            // activity()->log('Confirm Transaction'.$request->input('eventData'));
            // activity()->log('Confirm Transaction -- ' . $request['paymentReference']);
        } catch (Exception $e) {
            return response([], 500);
        }

        if ($response['requestSuccessful'] != true) {
            activity()->log('Request failed -- ' . $request['paymentReference']);
            return response([], 200);
        }

        if ($response['responseBody']['paymentStatus'] != 'PAID') {
            activity()->log('Amount Not Paid -- ' . $request['paymentReference']);
            return response([], 200);
        }



        $email = $request['customer']['email'];
        $paymentMethod = str_replace('_', ' ', $request['paymentMethod']);
        $user = User::where('email', $email)->get();
        $amount = $request['amountPaid'];

        if ($user->count() == 0) {
            activity()->log('User not found ' . $request['paymentReference']);
            // return response(['message'=>'user not found'], 200);
        }

        $user = $user->first();
        if (Transaction::where('reference', $request['paymentReference'])->get()->count() > 0) {
            // activity()->log('Transaction already exists found ' . $request['paymentReference']);
            return response(['message'=>'transaction already exists'], 200);
        }

        $before = CreditUserWalletService::credit($amount - 50, $user);

        Transaction::create([
            'user_id' => $user->id,
            'reference' => $request['paymentReference'],
            'status' => 'success',
            'before' => $before,
            'after' => $user->balance,
            'title' => 'Funded Wallet Through ' . $paymentMethod,
            'service_type' => 'credit',
            'description' => 'Account Funded through ' . $paymentMethod . ' from ' . $request['accountDetails']['accountNumber'] . ', Amount: #' . number_format($amount),
            'amount' => $amount
        ]);
        activity()->log('Credited Wallet!' . $request['paymentReference']);
        return response(['message'=> 'credited'], 200);
    }




    public function indextest(Request $request)
    {


        $request = $request->input('eventData');
        activity()->log('Request Made from Monniepoint for --' . $request['paymentReference']);

        if ($request['transactionHash'] != hash_hmac('sha512', $request, env('MONNIFY_SECRET_KEY'))) {
            return response(['message'=>'Failed to pass hash test'],200);
        }

        try {
            $response = Http::withHeaders([
                // 'Authorization' => 'Basic ' . base64_encode(env("MONNIFY_API_TOKEN"))
                'Authorization' => 'Basic ' . base64_encode(env('MONNIFY_API_KEY') . ':' . env('MONNIFY_SECRET_KEY'))
            ])->post(env('MONNIFY_URL') . '/api/v1/auth/login');
            activity()->log('Login Request --' . $request['paymentReference']);
        } catch (Exception $e) {

            return response([], 500);
        }


        $access_token = $response['responseBody']['accessToken'];

        try {
            $response = Http::withHeaders([

                'Authorization' => 'Bearer ' . $access_token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',

            ])->get(env('MONNIFY_URL') . '/api/v1/merchant/transactions/query', [
                'paymentReference' => $request['paymentReference'],

            ]);
            // activity()->log('Confirm Transaction'.$request->input('eventData'));
            activity()->log('Confirm Transaction -- ' . $request['paymentReference']);
        } catch (Exception $e) {
            return response([], 500);
        }

        if ($response['requestSuccessful'] != true) {
            activity()->log('Request failed -- ' . $request['paymentReference']);
            return response([], 200);
        }

        if ($response['responseBody']['paymentStatus'] != 'PAID') {

            activity()->log('Amount Not Paid -- ' . $request['paymentReference']);
            return response([], 200);
        }



        $email = $request['customer']['email'];
        $paymentMethod = str_replace('_', ' ', $request['paymentMethod']);
        $user = User::where('email', $email)->get();
        $amount = $request['amountPaid'];

        if ($user->count() == 0) {

            activity()->log('Bank 2 not found ' . $request['paymentReference']);
            return response([], 200);
        }

        $user = $user->first();
        if (Transaction::where('reference', $request['paymentReference'])->get()->count() > 0) {
            activity()->log('Transaction already exists found ' . $request['paymentReference']);
            return response([], 200);
        }

        $before = CreditUserWalletService::credit($amount - 50, $user);

        Transaction::create([
            'user_id' => $user->id,
            'reference' => $request['paymentReference'],
            'status' => 'success',
            'before' => $before,
            'after' => $user->balance,
            'title' => 'Funded Wallet Through ' . $paymentMethod,
            'service_type' => 'credit',
            'description' => 'Account Funded through ' . $paymentMethod . ' to ' . $request['destinationAccountInformation']['accountNumber'] . ', Amount: #' . number_format($amount),
            'amount' => $amount
        ]);
        activity()->log('Credited Wallet !' . $request['paymentReference']);
        return response(['message', 'credited'], 200);
    }
}
