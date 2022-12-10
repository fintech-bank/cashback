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
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://connect.tradedoubler.com/uaa/oauth/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        $fields = <<<EOT
grant_type=password&username=resabiletcse.com&password=CRIDIP85100

EOT;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Basic MTJkMjM3ZjgtNjYwZC0zZTM0LTlhMTItOTcwZDRiOTZiMzhjOjI2MTA1ZTRjYjM0OTA2Njg="
        ));

        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        return $info;
    }
}
