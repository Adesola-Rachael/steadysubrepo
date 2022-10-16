<?php

namespace App\Actions\Transaction\ReverseTransaction;

use App\Models\User;

class ReverseFailedTransactionAction
{
    public static function reverseFailedTransaction($transaction)
    {
        if ($transaction->status == 'failed' ) {
            $user = User::find($transaction->user->id);
            $transaction->update([
                'before' => $user->balance,
            ]);
            $user->update([
                'balance' => round($user->balance - $transaction->amount, 2),
                'spent' => round($user->spent + $transaction->amount, 2),
            ]);
            $transaction->update([
                'status' => 'success',
                'after' => $user->balance,
            ]);
            
        }
        
        
    }
}
