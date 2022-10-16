<?php

namespace App\Actions\Transaction;


use App\Models\TotalFund;
use App\Models\User;

class CreditUserWalletAction
{
    public static function credit($amount,  $user)
    {
        $before = $user->balance;
        $user->update([
            'balance' => round($user->balance += $amount,2)
        ]);
        $fund = TotalFund::find(1);
        $fund->amount += $amount;
        $fund->save();

        return $before;
    }
}