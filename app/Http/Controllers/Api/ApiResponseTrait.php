<?php

namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
    public function apiResponse($data = null, $msg = null, $status = 200)
    {
        $array = [
            'data' => $data,
            'message' => $msg,
            'status' => $status
        ];

        return $array;
    }
}
