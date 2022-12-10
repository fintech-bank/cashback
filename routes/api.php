<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('register', \App\Http\Controllers\Api\Auth\RegisterController::class);
});

Route::prefix('wallet')->group(function () {
    Route::post('/', [\App\Http\Controllers\Api\Wallet\WalletController::class, 'request']);
});

Route::get('/test', [\App\Http\Controllers\Api\ApiController::class, 'testing']);
