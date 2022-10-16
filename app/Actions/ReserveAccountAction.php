<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class ReserveAccountAction
{
    public static function reserveAccount(User $user)
    {
    

        $response = Http::withHeaders([
            // 'Authorization' => 'Basic ' . base64_encode(env("MONNIFY_API_TOKEN"))
            'Authorization' => 'Basic ' . base64_encode('MK_PROD_NJ0U4DZCC2:EGJEDSESSHPY9SHN92F0GF9DCWG1BLXW')
        ])->post('https://api.monnify.com/api/v1/auth/login');


        $response_token = $response['responseBody']['accessToken'];

        $req = [
            "accountReference" => "TELNETING-" . time(),
            "accountName" => "TELNETING/" . $user->email,
            "currencyCode" => "NGN",
            "contractCode" => "777143371479",
            "customerEmail" => $user->email,
            "customerName" => $user->name,
            "getAllAvailableBanks" => true,
            // "preferredBanks" => ["50515"]
        ];


        $response2 = Http::withHeaders([

            'Authorization' => 'Bearer ' . $response_token,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',

        ])->post('https://api.monnify.com/api/v2/bank-transfer/reserved-accounts', $req);

        $user->bank_name1 = $response2->json()['responseBody']['accounts'][0]['bankName'];
        $user->account_number1 = $response2->json()['responseBody']['accounts'][0]['accountNumber'];
        $user->account_name1 = $response2->json()['responseBody']['accounts'][0]['accountName'];
        $user->bank_name2 = $response2->json()['responseBody']['accounts'][1]['bankName'];
        $user->account_number2 = $response2->json()['responseBody']['accounts'][1]['accountNumber'];
        $user->account_name2 = $response2->json()['responseBody']['accounts'][1]['accountName'];
        $user->save();

        return $response2->json();
    }
}
