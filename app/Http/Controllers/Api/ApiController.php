<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Tradedoubler\User;

class ApiController extends Controller
{
    public function sendSuccess(string $message = null, array $data = null,int $status = 200)
    {
        return response()->json([
            "message" => $message,
            "data" => $data,
            "state" => "success"
        ], $status);
    }

    public function sendWarning(string $message = null, array $data = null,int $status = 200)
    {
        return response()->json([
            "message" => $message,
            "data" => $data,
            "state" => "warning"
        ], $status);
    }

    public function sendDanger(string $message = null, array $data = null,int $status = 200)
    {
        return response()->json([
            "message" => $message,
            "data" => $data,
            "state" => "danger"
        ], $status);
    }

    public function sendError(array|\Exception $data = null,int $status = 500)
    {
        return response()->json([
            "message" => "Erreur lors de l'execution de l'appel, consulter les logs ou contacter un administrateur",
            "data" => $data,
            "state" => "error"
        ], $status);
    }

    public function testing()
    {
        $user = new User();

        return $user->setAccessToken();
    }
}
