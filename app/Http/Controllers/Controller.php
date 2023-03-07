<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PhpParser\Node\Expr\Cast\Array_;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getSuccessResponse($data): Array
    {
        return [
            'success' => true,
            'data' => $data
        ];
    }

    protected function getErrorResponse(string $message): array
    {
        return [
            'success' => false,
            'message' => $message
        ];
    }
}
