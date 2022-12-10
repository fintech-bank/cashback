<?php

namespace App\Services\Tradedoubler;

class Tradedoubler
{
    private string $bearer_encode;
    protected string $access_token;

    protected string $endpoint;

    public function __construct()
    {
        $this->bearer_encode = base64_encode(config('services.tradedoubler.client_id').':'.config('services.tradedoubler.client_secret'));
        $this->endpoint = "https://connect.tradedoubler.com/";
        $this->setAccessToken();
    }

    /**
     */
    public function setAccessToken()
    {
        $call = \Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => 'Basic MTJkMjM3ZjgtNjYwZC0zZTM0LTlhMTItOTcwZDRiOTZiMzhjOjI2MTA1ZTRjYjM0OTA2Njg='
        ])->post('https://connect.tradedoubler.com/uaa/oauth/token', ['grant_type' => 'password', 'username' => 'resabiletcse.com', 'password' => 'CRIDIP85100'])->body();

        dd($call);
    }
}
