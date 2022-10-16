<?php

namespace App\Actions\Transaction\ReverseTransaction;

use App\Models\User;

class ReverseSuccessfulTransactionAction

{
    public static function reverseSuccessfulTransaction($transaction)
    {
        if ($transaction->status == 'success') {
            
            $user = User::find($transaction->user->id);

            $transaction->update([
                'before' => $user->balance,
            ]);
            $user->update([
                'balance' => round($user->balance + $transaction->amount,2),
                'spent' => round($user->spent - $transaction->amount,2),
            ]);
            $transaction->update([
                'status' => 'failed',
                'after' => $user->balance,
                'description' => 'Failed '. $transaction->description
            ]);
            
            
        }
        
    }
}
