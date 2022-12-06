<?php

namespace App\Http\Controllers\Api\Wallet;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WalletController extends ApiController
{
    public function request(Request $request)
    {
        $user = User::where('customer_fintech_id', $request->get('customer_id'))->first();

        return $this->sendSuccess(null, ['wallet' => $user->wallet, 'balance' => $user->balance]);
    }
}
