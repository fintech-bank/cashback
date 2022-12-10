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
    public function setAccessToken(): string
    {
        return \Http::withToken($this->bearer_encode, 'Basic')->post($this->endpoint.'uaa/oauth/token', [
            'grant_type' => 'password',
            'username' => 'resabiletcse.com',
            'password' => 'CRIDIP85100'
        ])->throw()->body();
    }
}
