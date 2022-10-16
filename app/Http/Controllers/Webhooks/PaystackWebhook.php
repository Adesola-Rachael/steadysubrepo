<?php

namespace App\Http\Controllers\UserController\Webhooks;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Actions\Transaction\ReverseTransaction\ReverseFailedTransactionService;
use Illuminate\Http\Request;
use Digikraaft\PaystackWebhooks\Http\Controllers\WebhooksController as PaystackWebhooksController;

class PaystackWebhook extends PaystackWebhooksController
{
    /*
|--------------------------------------------------------------------------
| Paystack Webhook
|--------------------------------------------------------------------------
|
| This implements https://github.com/digikraaft/laravel-paystack-webhooks
|
*/

    public function handleChargeSuccess($payload)
    {
        activity()->log('Paystack webhook for '.$payload['data']['reference']);
        $transaction = Transaction::where('reference', $payload['data']['reference'])->get()->first();
        if ($transaction) {
             ReverseFailedTransactionAction::reverseFailedTransaction($transaction);
        }
        return response(200);
    }
}
