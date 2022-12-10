<?php

namespace App\Services\Tradedoubler;

class User extends Tradedoubler
{
    public function user()
    {
        return \Http::get($this->endpoint.'/usermanagement/users/me')->object();
    }
}
