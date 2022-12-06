<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class RegisterController extends ApiController
{
    public function __invoke(Request $request)
    {
        try {
            $user = User::create([
                'civility' => $request->get('civility'),
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'email_verified_at' => now(),
                'password' => \Hash::make($request->get('password')),
                'customer_fintech_id' => $request->get('customer_id')
            ]);

            $user->wallet->update([
                'name' => 'Cashback',
                'slug' => 'cashback',
                'meta' => [
                    'limit_withdraw' => 20
                ]
            ]);

            return $this->sendSuccess(null, ["user" => $user]);
        }catch (Exception $exception) {
            return $this->sendError([$exception]);
        }
    }
}
