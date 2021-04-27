<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

    protected function response($data)
    {
        if (!is_null($data)) {
            return $this->success($data);
        }
        return $this->failed($data);
    }

    public function success($data): array
    {
        return [
            "status" => true,
            'message' => $data['message'],
        ];
    }

    public function failed($data): array
    {
        if (is_null($data)) {
            $data['message'] = 'The operation is failed';
        }
        return [
            'status' => false,
            'message' => $data['message'],
        ];
    }
}
